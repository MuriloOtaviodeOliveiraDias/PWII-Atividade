<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = htmlspecialchars($_POST['nome']);
    $mensagem = htmlspecialchars($_POST['mensagem']);
    
    $arquivo = fopen("contatos.txt", "a");
    fwrite($arquivo, "{$nome}: {$mensagem}\n");
    fclose($arquivo);
    
    $sucesso = true;
}
?>
