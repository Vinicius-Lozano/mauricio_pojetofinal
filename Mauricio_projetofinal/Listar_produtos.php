<?php
include 'Conexao.php';

$sql = "SELECT id, nome, descricao, preco FROM produtos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "
        <div class='produto'>
            <h2>{$row['nome']}</h2>
            <p>{$row['descricao']}</p>
            <p>R$ " . number_format($row['preco'], 2, ',', '.') . "</p>
            <button onclick=\"adicionarAoCarrinho({$row['id']}, '{$row['nome']}', {$row['preco']})\">Adicionar ao Carrinho</button>
        </div>";
    }
} else {
    echo "Nenhum produto encontrado.";
}

$conn->close();
?>
