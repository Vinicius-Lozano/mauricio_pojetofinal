<?php
include './src/php/config.php';

$sql = "SELECT id, nome, descricao, preco FROM produtos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "
        <div class='produto'>
        <img src='imagens/produto_{$row['id']}.jpg' alt ='{$row['nome']}'>
            <h2>{$row['nome']}</h2>
            <p>{$row['descricao']}</p>
            <p><strong>R$ ".numfmt_format($row['preco'], 2, ',', '.') . "</strong></p>
            <button onclick=\"adicionarAoCarrinho({$row['id']}, '{$row['nome']}', {$row['preco']})\">Adicionar ao Carrinho</button>
        </div>";
    }
} else {
    echo "<p>Nenhum produto encontrado.</p>";
}

$conn->close();
?>
