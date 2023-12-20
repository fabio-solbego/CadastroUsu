<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem vindo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif;
            background-color: brown;
    background-position-x: center;
    text-align: center;
    text-decoration: double;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    
       
    
    }
    </style>
</head>
<body>
    <h1 class="my-5">Opa, <!--<b><?php //echo htmlspecialchars($_SESSION["nome"]); ?>--></b>bem-vindo ao menu seu XIRUZÃO!!</h1>
    <p>
        <a href="api.php" class="btn btn-light" style="background-color: brown; color: black">Ver a previsão do tempo</a>
        <a href="tare.php" class="btn btn-light" style="background-color: orange; color: black">Adicione uma tarefa</a>     
        <a href="reset-password.php" class="btn btn-light" style="background-color: gold; color: black">Redefina sua senha</a>
        <a href="usuario.php" class="btn btn-light" style="background-color: gray; color: black">Gerenciar usuários</a>
    </p>
</body>
</html>