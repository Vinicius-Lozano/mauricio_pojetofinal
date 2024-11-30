<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Online</title>
    <link rel="stylesheet" href="./Trabalho.css">
</head>
<body>

    <?php include './src/app.html'; ?>

    <h1>Bem vindo à  loja Passo fino</h1>
    <div class="produto">
        <img src="Imagem do produto.jpg" alt="Produto">
        <h2>Nome do Produto</h2>
        <p>Descrição breve do produto</p>
        <p><strong>R$ 50,00</strong></p>
        <button onclick="AdicionarAoCarrinho(1)">Adicionar ao Carrinho</button>
    </div>

    <div class="produto">
        <img src="Imagem do produto.jpg" alt="Produto">
        <h2>Nome do Produto</h2>
        <p>Descrição breve do produto</p>
        <p><strong>R$ 50,00</strong></p>
        <button onclick="AdicionarAoCarrinho(1)">Adicionar ao Carrinho</button>
    </div>

    <div class="produto">
        <img src="Imagem do produto.jpg" alt="Produto">
        <h2>Nome do Produto</h2>
        <p>Descrição breve do produto</p>
        <p><strong>R$ 50,00</strong></p>
        <button onclick="AdicionarAoCarrinho(1)">Adicionar ao Carrinho</button>
    </div>

    <div class="produto">
        <img src="Imagem do produto.jpg" alt="Produto">
        <h2>Nome do Produto</h2>
        <p>Descrição breve do produto</p>
        <p><strong>R$ 50,00</strong></p>
        <button onclick="AdicionarAoCarrinho(1)">Adicionar ao Carrinho</button>
    </div>

    <div class="produto">
        <img src="Imagem do produto.jpg" alt="Produto">
        <h2>Nome do Produto</h2>
        <p>Descrição breve do produto</p>
        <p><strong>R$ 50,00</strong></p>
        <button onclick="AdicionarAoCarrinho(1)">Adicionar ao Carrinho</button>
    </div>

    <div class="produto">
        <?php include 'php/listar_produtos.php'; ?>
        <img src="Imagem do produto.jpg" alt="Produto">
        <h2>Nome do Produto</h2>
        <p>Descrição breve do produto</p>
        <p><strong>R$ 50,00</strong></p>
        <button onclick="AdicionarAoCarrinho(1)">Adicionar ao Carrinho</button>
    </div>

    <script src="./src/conteiners/Carrinho/Carrinho.js"></script>
</body>
</html>