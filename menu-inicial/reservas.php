<?php
include(ROOT_PATH . "/banco-de-dados/consultas.php");

$table = 'reservas';

$errors = array();
$mensagens = array();
$oid = '';
$nome_cliente = '';
$contato_cliente = '';
$acompanhantes = '';
$mesa = '';
$data_reserva = '';
$hr_reserva = '';


$reserva = selectAll($table, []);

if (isset($_POST['add-reservas'])) {

    if (count($errors) === 0) {
        unset($_POST['add-reservas']);
        $reserva_id = create($table, $_POST);
        $_SESSION['type'] = 'success';
    
        array_push($mensagens, 'Reserva realizada com sucesso!');

    } else {
        $_SESSION['message'] = 'Não foi possível criar a reserva';
        array_push($mensagens, 'Não foi possível criar a reserva para essa data!');
       
        $_SESSION['type'] = 'error';
    }
}

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $reserva = selectOne($table, ['id' => $id]);
    $id = $_POST['id'];
    $nome_cliente = $_POST['nome'];
    $contato_cliente = $_POST['contato'];
    $acompanhantes = $_POST['acompanhantes'];
    $mesa = $_POST['mesa'];
    $data_reserva = $_POST['data'];
    $hr_reserva = $_POST['hora'];


    $result = mysqli_query($conn, "INSERT INTO reservas('nome', 'contato', 'acompanhantes', 'mesa', 'data', 'hora') 
    VALUES ('$nome_cliente', '$contato_cliente', '$acompanhantes', '$mesa', '$data_reserva', '$hr_reserva',)");
    }