<?php
// Processar login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    // Verificação simulada
    if ($email == "admin@exemplo.com" && $senha == "123") {
        session_start();
        $_SESSION['logado'] = true;
        header("Location: index.php");
        exit;
    } else {
        $erro = "Credenciais inválidas!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <nav><!-- Menu igual ao index --></nav>

    <h1>Login</h1>
    
    <?php if (isset($erro)) echo "<p style='color:red'>$erro</p>"; ?>
    
    <form method="POST">
        Email: <input type="email" name="email" required><br>
        Senha: <input type="password" name="senha" required><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>