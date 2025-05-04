<?php
// Processar formulário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    
    // Simulação de cadastro
    echo "<script>alert('Cadastrado com sucesso!')</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
</head>
<body>
    <nav><!-- Menu igual ao index --></nav>

    <h1>Cadastre-se</h1>
    
    <form method="POST">
        Nome: <input type="text" name="nome" required><br>
        Email: <input type="email" name="email" required><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>