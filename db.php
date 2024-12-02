<?php

// Informações de login
$servername = "localhost:82";
$username = "root";
$password = "";
$dbname = "sistemacurriculo";

// Conexão com o banco de dados
$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error){
    die($connection->connect_error);
}

?>