<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Online</title>
    <link rel="stylesheet" href="./Trabalho.css">
</head>
<body>
    <?php include "./src/navbar.php"?>

    <h1>Bem vindo à  loja Passo fino</h1>
    <div class="produto">
        <img src="/mauricio_projetofinal/PassoFinoSite/src/img/Imagem Projeto 1.jpg" alt="Produto">
        <h2>Nome do Produto</h2>
        <p>Descrição breve do produto</p>
        <p><strong>R$ 50,00</strong></p>
        <button onclick="AdicionarAoCarrinho(1)">Adicionar ao Carrinho</button>
    </div>

    <div class="produto">
        <img src="/mauricio_projetofinal/PassoFinoSite/src/img/Imagem Projeto 2.jpg" alt="Produto">
        <h2>Nome do Produto</h2>
        <p>Descrição breve do produto</p>
        <p><strong>R$ 50,00</strong></p>
        <button onclick="AdicionarAoCarrinho(1)">Adicionar ao Carrinho</button>
    </div>

    <div class="produto">
        <img src="/mauricio_projetofinal/PassoFinoSite/src/img/Imagem Projeto 3.jpg" alt="Produto">
        <h2>Nome do Produto</h2>
        <p>Descrição breve do produto</p>
        <p><strong>R$ 50,00</strong></p>
        <button onclick="AdicionarAoCarrinho(1)">Adicionar ao Carrinho</button>
    </div>

    <div class="produto">
        <img src="/mauricio_projetofinal/PassoFinoSite/src/img/Imagem Projeto 4.jpg" alt="Produto">
        <h2>Nome do Produto</h2>
        <p>Descrição breve do produto</p>
        <p><strong>R$ 50,00</strong></p>
        <button onclick="AdicionarAoCarrinho(1)">Adicionar ao Carrinho</button>
    </div>

    <div class="produto">
        <img src="/mauricio_projetofinal/PassoFinoSite/src/img/Imagem Projeto 5.jpg" alt="Produto">
        <h2>Nome do Produto</h2>
        <p>Descrição breve do produto</p>
        <p><strong>R$ 50,00</strong></p>
        <button onclick="AdicionarAoCarrinho(1)">Adicionar ao Carrinho</button>
    </div>

    <div class="produto">
            <img src="/mauricio_projetofinal/PassoFinoSite/src/img/Imagem Projeto 6.jpg" alt="Produto">
            <h2>Nome do Produto</h2>
            <p>Descrição breve do produto</p>
            <p><strong>R$ 50,00</strong></p>
            <button onclick="AdicionarAoCarrinho(1)">Adicionar ao Carrinho</button>
    </div>

    <?php include './Listar_produtos.php' ?>
    <script src="./src/conteiners/Carrinho/Carrinho.js"></script>
</body>
</html>