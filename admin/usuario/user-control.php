<?php
include("../../path.php");
include(ROOT_PATH . "/banco-de-dados/consultas.php");

$table = 'usuarios';

$errors = array();
$oid = '';
$nome = '';
$senha = '';
$senhaConf = '';
$email = '';
$cpf = '';
$telefone = '';


if ( isset($_POST['create-admin'])) {

    $errors = validateUser($_POST);

    if (count($errors) === 0) {

        $_POST['senha'] = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        unset($_POST['senhaConf'], $_POST['senha'],  $_POST['create-admin']);
        
        $user_id = create($table, $_POST);

        $user = selectOne($table, ['oid' => $user_id]);

        if(isset($user)){
        var_dump($user);
        header('location:' +  BASE_URL . "/admin/usuario/user.php" ); 
        }

    
    } else {
        $username = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senhaConf = $_POST['senhaConf'];
    }
}

if (isset($_POST['update-user'])) {

    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        $oid = $_POST['oid'];
        unset($_POST['senhaConf'], $_POST['update-user'], $_POST['oid']);
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

    if (empty($user['senha'])) {
        array_push($errors, 'Senha é um campo obrigatório');
    }

    if ($user['senhaConf'] !== $user['senha']) {
        array_push($errors, 'A senha não confere');
    }

    $existingUser = selectOne('usuarios', ['email' => $user['email']]);

    if ($existingUser) {
     array_push($errors, 'Email já cadastrado');
    }

    return $errors;
}

