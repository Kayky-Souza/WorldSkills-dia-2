<?php
include "db.php";

// Adicionar as informações do usuario no banco de dados
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $insertDados = "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    $connection->query($insertDados);
}

$url = "index.php";

header('Location: '.$url);

$connection->close();
?>