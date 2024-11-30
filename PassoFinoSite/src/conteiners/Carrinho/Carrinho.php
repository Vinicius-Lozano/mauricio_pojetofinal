<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="../../../Trabalho.css">
</head>
<body>
    <?php include "../../navbar.php" ?>
    <header>
        <h1>Seu Carrinho</h1>
    <nav>
        <ul>
            <li><a href="/index.html"></a></li>
            <li><a href="/src/conteiners/Carrinho/Carrinho.html"></a></li>
        </ul>
    </nav>
    </header>

    <main>
        <div class="carrinho">
            <?php include '../../php/exibir_carrinho.php'; ?>
        </div>
    </main>
    <h2>Total: <span id="total">R$0,00</span></h2>
    <button onclick="finalizarCompra()">Finalizar Compra</button>
    <script src="./Carrinho.js"></script>
</body>
</html>