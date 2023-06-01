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
    $_SESSION['oid'] = $user['oid'];
    $_SESSION['nome'] = $user['nome'];
    $_SESSION['message'] = 'Você esta logado!';
    $_SESSION['type'] = 'success';

    if ($_SESSION['oid']) {
        header('location: ' . BASE_URL . '/index.php'); 
    } 

    exit();
}

if (isset($_POST['register-btn']) || isset($_POST['create-admin'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['passwordConf'], $_POST['create-admin']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        if (isset($_POST['admin'])) {
            $_POST['admin'] = 1;
            $user_id = create($table, $_POST);
            $_SESSION['message'] = 'Administrador criado';
            $_SESSION['type'] = 'success';
            header('location: ' . BASE_URL . '/admin/users/index.php'); 
            exit();
        } else {
            $_POST['admin'] = 0;
            $user_id = create($table, $_POST);
            $user = selectOne($table, ['id' => $user_id]);
            loginUser($user);
        }
    } else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
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
        $user = selectOne($table, ['nome' => $_POST['nome']]);

        if ($user && password_verify($_POST['senha'], $user['senha'])) {
            loginUser($user);
        } else {
           array_push($errors, 'Usuário ou Senha Incorretos!');
        }
    }

    $username = $_POST['nome'];
    $senha = $_POST['senha'];
}

if (isset($_GET['delete_id'])) {
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = 'Administrador deletado';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/index.php'); 
    exit();
}