<?php

include(ROOT_PATH . "/banco-de-dados/consultas.php");

$table = 'usuarios';

$admin_users = selectAll($table);

$errors = array();
$oid = '';
$nome = '';
$senha = '';
$email = '';
$cpf = '';
$telefone = '';


function loginUser($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['nome'] = $user['nome'];
    $_SESSION['message'] = 'Você esta logado!';
    $_SESSION['type'] = 'success';

    if ($_SESSION['id']) {
        header('location: ' . BASE_URL . 'login/login.php'); 
    } 

    exit();
}

if (isset($_POST['register-btn']) || isset($_POST['create-admin'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['senha'], $_POST['create-admin']);
        $_POST['senha'] = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        
        $user_id = create($table, $_POST);
        $user = selectOne($table, ['id' => $user_id]);
        loginUser($user);
      
    } else {
        $username = $_POST['nome'];
        $email = $_POST['email'];
        $password = $_POST['senha'];
        $passwordConf = $_POST['senhaConf'];
    }
}

if (isset($_POST['update-user'])) {
    
    if (count($errors) === 0) { 
        $id = $_POST['id']; 
        unset($_POST['update-user'], $_POST['id']);
        $topic_id = update($table, $id, $_POST); 
        $_SESSION['message'] = 'user atualizada com sucesso';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/usuario/user.php');
        exit();
    } else {
        $_SESSION['message'] = 'Não foi possível criar a reserva';
        $_SESSION['type'] = 'error';
    }
} 

if (isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);
    
    $oid = $user['id'];
    $nome = $user['nome'];
    $email = $user['email'];

}


if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {

        $user = selectOne($table, ['email' => $_POST['email']]);

        if ($user && $_POST['senha'] === $user['senha']) {
            loginUser($user);
        } else {
           array_push($errors, 'Usuário ou Senha Incorretos!');
        }
    }

    $email = $_POST['email'];
    $senha = $_POST['senha'];
}

if (isset($_GET['delete_id'])) {
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = 'Administrador deletado';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/index.php'); 
    exit();
}

function validateUser($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username é um campo obrigatório');
    }

    if (empty($user['email'])) {
        array_push($errors, 'Email é um campo obrigatório');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Senha é um campo obrigatório');
    }

    if ($user['passwordConf'] !== $user['password']) {
        array_push($errors, 'A senha não confere');
    }


    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {
        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Email já cadastrado');
        }

        if (isset($user['create-admin'])) {
            array_push($errors, 'Email já cadastrado');
        }
    }

    return $errors;
}


function validateLogin($user)
{
    $errors = array();

    if (empty($user['email'])) {
        array_push($errors, 'Email é um campo obrigatório');
    }

    if (empty($user['senha'])) {
        array_push($errors, 'Senha é um campo obrigatório');
    }

    return $errors;
}