<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    
    echo "<script>alert('Cadastrado com sucesso!')</script>";
}
?>
