<!-- <?php
    //include "tabela.php";
    //exibirUsuarios();
    ?> -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login de usuarios</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="conteiner">
        <form class="login" action="#" method="post">

            <h2 class="tituloLogin">Login</h2>

            <input type="text" name="nome" placeholder="Usuario ou email">

            <input type="email" min="0" name="senha" placeholder="Senha">

            <input type="submit" value="Entrar">

            <p class="registrar"><a href="teste.php">Registrar</a></p>
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