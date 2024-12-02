<?php
include "db.php";

// Atualiza os usuarios
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])){
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $updateDados = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha' WHERE id=$id";
    $connection->query($updateDados);
}

$connection->close();
?>