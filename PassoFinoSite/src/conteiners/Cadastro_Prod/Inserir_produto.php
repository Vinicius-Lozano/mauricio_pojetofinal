<?php
include '../../php/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $nomeProduto = $_POST['nomeProduto'] ?? null;
    $descricaoProduto = $_POST['descricaoProduto'] ?? null;
    $precoProduto = $_POST['precoProduto'] ?? null;
    
    
    if (!$nomeProduto || !$precoProduto) {
        die('Por favor, preencha os campos obrigatórios.');
    }

    
    $imagemProduto = null; 
    
    
    if (isset($_FILES['imagemProduto']) && $_FILES['imagemProduto']['error'] == 0) {
        $imagemProduto = $_FILES['imagemProduto']['name'];
        $imagemTempPath = $_FILES['imagemProduto']['tmp_name'];
        $imagemDestino = '../../imagens/' . $imagemProduto;
        
        
        if (!move_uploaded_file($imagemTempPath, $imagemDestino)) {
            die('Erro ao enviar a imagem.');
        }
    }

    
    $sql = "INSERT INTO produtos (nomeProduto, descricao, preco, imagem) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        
        $imagemProduto = $imagemProduto ?? null;
        $stmt->bind_param('ssds', $nomeProduto, $descricaoProduto, $precoProduto, $imagemProduto);
        
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