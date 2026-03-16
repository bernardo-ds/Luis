<?php

include_once "connection.php";

$nome_completo = $_POST['nome_completo'];
$email = $_POST['email'];
$passaporte = $_POST['passaporte'];
$destino = $_POST['destino'];
$data_viagem = $_POST['data_viagem'];


$sql = "INSERT INTO reservas(nome_completo, email, passaporte, destino, data_viagem) VALUES ('$nome_completo', '$email', '$passaporte', '$destino', '$data_viagem')";

if(mysqli_query($conn, $sql)){
    return true;
}
else{
    return false;
}