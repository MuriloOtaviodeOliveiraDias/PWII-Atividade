<?php
// Conexão básica com o banco (opcional)
$host = "localhost";
$user = "root";
$pass = "";
$db = "nome_banco";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="produtos.php">Produtos</a>
        <a href="cadastro.php">Cadastro</a>
        <a href="login.php">Login</a>
        <a href="contato.php">Contato</a>
    </nav>

    <h1>Bem-vindo!</h1>
    <?php
    // Exemplo simples de PHP
    date_default_timezone_set('America/Sao_Paulo');
    echo "<p>Hoje é: " . date('d/m/Y H:i') . "</p>";
    ?>
</body>
</html>