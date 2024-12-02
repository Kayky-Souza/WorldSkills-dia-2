<?php
include "db.php";

// Exibe os usuarios
$selectUsuarios = "SELECT * FROM usuarios";
$queryUsuarios = $connection->query($selectUsuarios);

function exibirUsuarios(){
    global $queryUsuarios;
    if ($queryUsuarios->num_rows > 0){
        echo "
            <table>
            <tr>
            <th>Nome</th>
            <th>email</th>
            <th>senha</th>
            </tr>
            ";
        while($row = $queryUsuarios->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . "<input type='text' class='$row[id]' value='$row[nome]'>" . "</td>";
            echo "<td>" . "<input type='email' class='$row[id]' value='$row[email]'>" . "</td>";
            echo "<td>" . "<input type='password' class='$row[id]' value='$row[senha]'>" . "</td>";
            echo "<td>" . "<input type='submit' onclick='atualizarDados($row[id])' value='Salvar alterações'>" . "</td>";
            echo "<td>" . "<input type='submit' onclick='apagarDados($row[id])' value='Apagar'>" . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else{
        echo "<p>Sem usuarios cadastrados</p>";
    }
}

$connection->close();
?>