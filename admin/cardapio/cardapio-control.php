<?php
include("../../path.php");
include(ROOT_PATH . "/banco-de-dados/consultas.php");

$errors = array();
$id = '';
$nome = '';
$valor = '';
$descricao = '';
$categoria = '';

$table = 'itens';

if (isset($_POST['create-item'])) {

    if (!empty($_FILES['img']['name'])) {
        $image_name = time() . '_' . $_FILES['img']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['img']['tmp_name'], $destination);

        if ($result) {
            $_POST['img'] = $image_name;
        } else {
            array_push($errors, "Falha em carregar imagem");
        }
    } else {
        array_push($errors, "Imagem obrigatória");
    }

    if (count($errors) == 0) {

        unset($_POST['create-item']);

        $post_id = create($table, $_POST);

        $_SESSION['message'] = "Item criado com sucesso";
        $_SESSION['type'] = "success";

        header("location: " . BASE_URL . "/admin/cardapio/cardapio.php"); 
        exit();    
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }

}

if (isset($_POST['update-item'])) {

    if (!empty($_FILES['img']['name'])) {

        $image_name = time() . '_' . $_FILES['img']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['img']['tmp_name'], $destination);

        if ($result) {
           $_POST['img'] = $image_name;
        }

    } 

    if (count($errors) == 0) {

        $id = $_POST['id'];
        unset($_POST['update-item'], $_POST['id']);
        $item_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Item atualizado com sucesso";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/cardapio/cardapio.php");    
        exit(); 

    } 
}


    if (isset($_GET['id'])) {
    $item = selectOne($table, ['id' => $_GET['id']]);

    $id = $user['id'];

    }


if (isset($_GET['del_id'])) {
    $count = delete($table, $_GET['del_id']);
    $_SESSION['message'] = 'Item deletado';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . 'admin/cardapio/cardapio.php'); 
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

