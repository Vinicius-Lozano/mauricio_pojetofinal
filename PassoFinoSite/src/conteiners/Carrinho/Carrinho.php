<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="../../../Trabalho.css">
</head>
<body>
    <header>
    <?php include "../../navbar.php" ?>
        <h1>Seu Carrinho</h1>
    </header>

    <main>
        <div id="itensCarrinho" class="carrinho"></div>
        <h2>Total: <span id="total">R$ 0,00</span></h2>
        <button onclick="finalizarCompra()">Finalizar Compra</button>
    </main>

    <script src="/mauricio_projetofinal/PassoFinoSite/src/conteiners/Carrinho/Carrinho.js"></script>
</body>
</html>