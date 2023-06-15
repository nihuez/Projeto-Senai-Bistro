<?php
include("../../path.php");
include(ROOT_PATH . "/banco-de-dados/consultas.php");

$errors = array();
$id = '';
$nome = '';
$valor = '';
$descricao = '';
$categoria = '';

if (isset($_POST['create-item'])) {

    if (count($errors) === 0) {

        if(isset($_FILES['img'])){

            $img = $_FILES['img']['tmp_name'];
            $tipo = $_FILES['img']['type'];

            $conteudo = base64_encode(file_get_contents($img));

            $sql = 'INSERT INTO `itens`(`nome`, `valor`, `descricao`, `categoria`, `img`, `tipo`) 
            VALUES (?, ?, ?, ?, ?, ?)';

            $stmt = $conn->prepare($sql);

            $stmt->bind_param('ssssss', $_POST['nome'], $_POST['valor'], $_POST['descricao'], $_POST['categoria'], $conteudo, $tipo);

            if ($stmt->execute()) {
                $id = $stmt->insert_id;
                $stmt->close();
                $_SESSION['type'] = 'success';
                header('Location: cardapio.php');
                exit();
            }

            $_SESSION['type'] = 'success';
    
            header('Location:' . "cardapio.php");

        }


    } else {

        $_SESSION['message'] = 'Não foi possível criar o usuário';

        $_SESSION['type'] = 'error';
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

