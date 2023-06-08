<?php

include(ROOT_PATH . "/banco-de-dados/consultas.php");

$table = 'usuarios';

$errors = array();
$oid = '';
$nome = '';
$senha = '';
$email = '';
$cpf = '';
$telefone = '';

function loginUser($user)
{
    $_SESSION['oid'] = $user['oid'];
    $_SESSION['nome'] = $user['nome'];
    $_SESSION['message'] = 'Você esta logado!';
    $_SESSION['type'] = 'success';

    if ($_SESSION['oid']) {
        header('location: ../admin/reservas/tb_reservas.php'); 
    } 

    exit();
}

if (isset($_POST['register-btn']) || isset($_POST['create-admin'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['senha'], $_POST['create-admin']);
        $_POST['senha'] = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        
        $user_id = create($table, $_POST);
        $user = selectOne($table, ['oid' => $user_id]);
        loginUser($user);
      
    } else {
        $username = $_POST['nome'];
        $email = $_POST['email'];
        $password = $_POST['senha'];
        $passwordConf = $_POST['senhaConf'];
    }
}

if (isset($_POST['update-user'])) {

    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        $oid = $_POST['oid'];
        unset($_POST['passwordConf'], $_POST['update-user'], $_POST['oid']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $count = update($table, $oid, $_POST);
        $_SESSION['message'] = 'Administrador criado';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/index.php'); 
        exit();
        
    } else {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senhaConf = $_POST['senhaConf'];
    }
}


if (isset($_GET['oid'])) {
    $user = selectOne($table, ['oid' => $_GET['oid']]);
    
    $oid = $user['oid'];
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