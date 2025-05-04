<?php
// Processar contato
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = htmlspecialchars($_POST['nome']);
    $mensagem = htmlspecialchars($_POST['mensagem']);
    
    // Simulação de envio
    $arquivo = fopen("contatos.txt", "a");
    fwrite($arquivo, "{$nome}: {$mensagem}\n");
    fclose($arquivo);
    
    $sucesso = true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contato</title>
</head>
<body>
    <nav><!-- Menu igual ao index --></nav>

    <h1>Contato</h1>
    
    <?php if (isset($sucesso)) echo "<p>Mensagem enviada!</p>"; ?>
    
    <form method="POST">
        Nome: <input type="text" name="nome" required><br>
        Mensagem: <textarea name="mensagem" required></textarea><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>