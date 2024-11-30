<?php 
session_start();

if (!isset($_SESSION ['carrinho']) || empty($_SESSION['carrinho'])) {
    echo "<p>Seu carrinho está vazio.</p>";
} else {
    echo "<table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>";
    foreach ($_SESSION['carrinho'] as $item) {
        echo "<tr>
                <td>{$item['nome']}</td>
                <td>R$ " .number_format($item['preco'], 2, '.', '.') . "</td>
            </tr>";
    }
    echo "</tbody><table>";
}
?>