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

$user = selectAll($table, []);


if (isset($_POST['create-user'])) {

    if (count($errors) === 0) {

        unset($_POST['create-user']);
        unset($_POST['senhaConf']);

        $user_id = create($table, $_POST);

        $_SESSION['type'] = 'success';
        
        header('Location:' . "user.php");

    } else {

        $_SESSION['message'] = 'Não foi possível criar o usuário';

        $_SESSION['type'] = 'error';
    }
}

if (isset($_POST['update-user'])) {
    
    if (count($errors) === 0) { 
        $oid = $_POST['id']; 
        unset($_POST['update-user'], $_POST['id']);
        $topic_oid = update($table, $oid, $_POST); 
        $_SESSION['message'] = 'cadastro atualizado com sucesso';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/usuario/user.php');
        exit();
    } else {
        $_SESSION['message'] = 'Não foi possível atualizar user';
        $_SESSION['type'] = 'error';
    }
} 



    if (isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);

    $oid = $user['id'];
    $nome = $user['nome'];
    $senha = $user['senha'];
    $email = $user['email'];
    $cpf = $user['cpf'];
    $telefone = $user['telefone'];
}


if (isset($_GET['del_id'])) {
    $count = delete($table, $_GET['del_id']);
    $_SESSION['message'] = 'Administrador deletado';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . 'admin/usuario/user.php'); 
    exit();
}

function validateUser($user)
{
    $errors = array();

    if (empty($user['nome'])) {
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

