<?php
include 'Conexao.php';

// Obter dados da compra
$cliente_id = $_POST['cliente_id'];
$produtos = json_decode($_POST['produtos'], true); // Produtos vêm em formato JSON

foreach ($produtos as $produto) {
    $produto_id = $produto['id'];
    $quantidade = $produto['quantidade'];

    $sql = "INSERT INTO compras (cliente_id, produto_id, quantidade) VALUES ('$cliente_id', '$produto_id', '$quantidade')";

    if (!$conn->query($sql)) {
        echo "Erro ao registrar a compra: " . $conn->error;
        exit;
    }
}

echo "Compra finalizada com sucesso!";
$conn->close();
?>
