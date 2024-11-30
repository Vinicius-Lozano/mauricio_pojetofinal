<?php
include '../../php/config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $nomeProduto = $_POST['nomeProduto'] ?? null;
    $descricaoProduto = $_POST['descricaoProduto'] ?? null;
    $precoProduto = $_POST['precoProduto'] ?? null;

    
    if (!$nomeProduto || !$precoProduto) {
        die('Por favor, preencha os campos obrigatórios.');
    }

    $sql = "INSERT INTO produtos (nome, descricao, preco) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param('ssd', $nomeProduto, $descricaoProduto, $precoProduto);
        if ($stmt->execute()) {
            echo "Produto cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar produto: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Erro na preparação da query: " . $conn->error;
    }
}
?>