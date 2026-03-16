<?php

$server = "localhost";
$user = "root";
$password = "root";
$database = "luan";
$port = "3306";

$conn = new mysqli("localhost","root","","luan","3306");

if($conn->connect_error){
    echo "erro";
}
else{
    echo "Reserva concluida!";
}