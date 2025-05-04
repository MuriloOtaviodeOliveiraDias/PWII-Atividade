<?php
// Simulação de produtos
$produtos = [
    ["id" => 1, "nome" => "Paracetamol", "preco" => 12.90],
    ["id" => 2, "nome" => "Ibuprofeno", "preco" => 18.50]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Produtos</title>
</head>
<body>
    <nav><!-- Menu igual ao index --></nav>

    <h1>Produtos</h1>
    
    <ul>
        <?php foreach ($produtos as $prod): ?>
            <li><?= $prod['nome'] ?> - R$ <?= number_format($prod['preco'], 2) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
</html>