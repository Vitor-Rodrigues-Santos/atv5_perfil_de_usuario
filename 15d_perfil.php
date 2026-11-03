<?php
//Página restrita
session_start();

//Verifica se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header ("Location: 15d_login.php");
}
$fundo = $_SESSION['fundo'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body style="background-color: <?php echo $fundo; ?> ;">
    <h2>Bem vindo, <?php echo $_SESSION['usuario'] ?>!</h2>
    <p>Esta é uma página restrita apenas para seu usuário, com sua cor de fundo escolhida.</p>
    <a href="15d_logout.php">Logout</a>
</body>
</html>