<?php
include("../../path.php");
include(ROOT_PATH . "/banco-de-dados/consultas.php");


$table = 'desconto';

$errors = array();
$oid = '';
$item = '';
$valor = '';


if (isset($_POST['create-promo'])) {


    if (count($errors) == 0) {

        unset($_POST['create-promo']);

        $post_id = create($table, $_POST);

        $_SESSION['message'] = "Item criado com sucesso";
        $_SESSION['type'] = "success";

        header("location: " . BASE_URL . "/admin/promocoes/promocoes.php"); 
        exit();    
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }

}

if (isset($_POST['update-user'])) {

    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        $oid = $_POST['id'];
        unset($_POST['senhaConf'], $_POST['update-user'], $_POST['id']);
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


    if (isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);

    $oid = $user['id'];
    $nome = $user['nome'];
    $email = $user['email'];

}


if (isset($_GET['del_id'])) {
    $count = delete($table, $_GET['del_id']);
    $_SESSION['message'] = 'Item deletado com sucesso';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL .  "/admin/promocoes/promocoes.php"); 
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
