<?php
    //include "tabela.php";
    //exibirUsuarios();
    ?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de cadastro de usuarios</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="conteiner">
        
        <form action="cadastro.php" method="post">
            <div class="titulosRegistro">
                <h2 class="tituloCadastro">Login</h2>
                
            </div>
            <h2 class="subtitulo">Registrar</h2>
            <input type="text" name="nome" placeholder="Usuario">

            <input type="email" min="0" name="email" placeholder="Email">

            <input type="password" min="0" name="senha" placeholder="Senha">

            <!-- <input type="password" min="0" name="" placeholder="Confirmar Senha"> -->

            <input type="submit" value="Registrar">
        </form>
    </div>
    <!-- <p>Usuarios cadastrados:</p> -->

  

    <script>
        function atualizarDados(id){
            let classValor = document.getElementsByClassName(id);
            let nome = classValor[0].value;
            let email = classValor[1].value;
            let senha = classValor[2].value;

            const xhttp = new XMLHttpRequest();
            xhttp.open("POST", "update.php");
            xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhttp.send("id=" + id + "&nome=" + nome + "&email=" + email + "&senha=" + senha);
        }

        function apagarDados(id){
            const xh = new XMLHttpRequest();
            xh.open("POST", "delete.php");
            xh.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xh.send("id=" + id);
            xh.onload = function() {
                if (xh.status == 200) {
                    location.reload();
                }
                }
        }
</script>
</body>
</html>