<?php
include "db.php";

// Apaga o usuario do banco de dados
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])){
    $id = $_POST["id"];
    $deleteDados = "DELETE FROM usuarios WHERE id=$id";
    $connection->query($deleteDados);
}

$connection->close();
?>