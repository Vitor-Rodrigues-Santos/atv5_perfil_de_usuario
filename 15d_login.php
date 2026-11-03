<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form method="post" action="">
        <label for="usuario"><strong>Usuário:</strong></label><br>
        <input type="text" name="usuario" required><br><br>

        <label for="senha"><strong>Senha:</strong></label><br>
        <input type="password" name="senha" required><br><br>

        <label for="fundo"><strong>Cor de Fundo:</strong></label><br>
        <input type="color" name="fundo" required><br><br>

        <button type="submit">Entrar</button>
    </form>

    <?php
    session_start();

    //Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Recebe os valores enviados pelo formulário
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $fundo = $_POST['fundo'];

        //Conecta com o banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "Senai@118";
        $dbname = "exercicio";

        $conn = new mysqli($servername, $username, $password, $dbname);

        //Verifica a conexão
        if ($conn->connect_error) {
            die("Falha de conexão: " . $conn->connect_error);
        }

        //COnsulta o usuário do BD
        $sql = "SELECT * FROM usuarios
                WHERE usuario = '$usuario' AND senha = '$senha'";

        $result = $conn->query($sql);

        //Verifica se encontrou o usuário
        if ($result->num_rows > 0) {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['fundo'] = $fundo;

            header("Location: 15d_perfil.php");
            exit();
            echo "<script>
                    window.location.href = '15b_restrita.php';
                    ";
        }else {
            echo "<p style='color: red;'>Usuário ou senha incorretos.</p>";
        }

        //Fecha a conexão
        $conn->close();
    }
    ?>
</body>
</html>
