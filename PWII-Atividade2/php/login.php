<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
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
