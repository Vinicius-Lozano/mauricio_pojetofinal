<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Online</title>
    <link rel="stylesheet" href="./Trabalho.css">
</head>
<body>
    
    <nav>
        <ul class="navbar">
            <li><a href="../../index.php">Home</a></li>
            <li><a href="./login/Cadastrar_Cliente.html">login</a></li>
            <li><a href="#carrinho">carrinho</a></li>
        </ul>
    </nav>

    <h1>Bem vindo à  loja Passo fino</h1>
    <div class="produto">
        <img src="c:\Users\kuram\AppData\Local\Packages\5319275A.WhatsAppDesktop_cv1g1gvanyjgm\TempState\C9B6D756D47A94C56822EE7B63338679\Imagem do WhatsApp de 2024-11-30 à(s) 13.35.41_004e8067.jpg" alt="Produto">
        <h2>Nome do Produto</h2>
        <p>Descrição breve do produto</p>
        <p><strong>R$ 50,00</strong></p>
        <button onclick="AdicionarAoCarrinho(1)">Adicionar ao Carrinho</button>
    </div>

    <div class="produto">
        <img src="c:\Users\kuram\AppData\Local\Packages\5319275A.WhatsAppDesktop_cv1g1gvanyjgm\TempState\D0D926E845B8E6665D91E4F3EB27BE32\Imagem do WhatsApp de 2024-11-30 à(s) 13.35.41_d9db8629.jpg" alt="Produto">
        <h2>Nome do Produto</h2>
        <p>Descrição breve do produto</p>
        <p><strong>R$ 50,00</strong></p>
        <button onclick="AdicionarAoCarrinho(1)">Adicionar ao Carrinho</button>
    </div>

    <div class="produto">
        <img src="c:\Users\kuram\AppData\Local\Packages\5319275A.WhatsAppDesktop_cv1g1gvanyjgm\TempState\8A2A4B95F7041879CC09F77C1D4D5542\Imagem do WhatsApp de 2024-11-30 à(s) 13.35.41_9665f05f.jpg" alt="Produto">
        <h2>Nome do Produto</h2>
        <p>Descrição breve do produto</p>
        <p><strong>R$ 50,00</strong></p>
        <button onclick="AdicionarAoCarrinho(1)">Adicionar ao Carrinho</button>
    </div>

    <div class="produto">
        <img src="c:\Users\kuram\AppData\Local\Packages\5319275A.WhatsAppDesktop_cv1g1gvanyjgm\TempState\916559B403D8953AF2EBD499026BB3EB\Imagem do WhatsApp de 2024-11-30 à(s) 13.35.41_1887be2f.jpg" alt="Produto">
        <h2>Nome do Produto</h2>
        <p>Descrição breve do produto</p>
        <p><strong>R$ 50,00</strong></p>
        <button onclick="AdicionarAoCarrinho(1)">Adicionar ao Carrinho</button>
    </div>

    <div class="produto">
        <img src="c:\Users\kuram\AppData\Local\Packages\5319275A.WhatsAppDesktop_cv1g1gvanyjgm\TempState\7FFBB809341DD3A58D72726C073E2EA6\Imagem do WhatsApp de 2024-11-30 à(s) 13.43.43_ba8dc387.jpg" alt="Produto">
        <h2>Nome do Produto</h2>
        <p>Descrição breve do produto</p>
        <p><strong>R$ 50,00</strong></p>
        <button onclick="AdicionarAoCarrinho(1)">Adicionar ao Carrinho</button>
    </div>

    <div class="produto">
            <img src="c:\Users\kuram\AppData\Local\Packages\5319275A.WhatsAppDesktop_cv1g1gvanyjgm\TempState\7A070F537F59AEFDB8445BF835164EFB\Imagem do WhatsApp de 2024-11-30 à(s) 13.43.43_96d74d59.jpg" alt="Produto">
            <h2>Nome do Produto</h2>
            <p>Descrição breve do produto</p>
            <p><strong>R$ 50,00</strong></p>
            <button onclick="AdicionarAoCarrinho(1)">Adicionar ao Carrinho</button>
    </div>

    <?php include 'php/listar_produtos.php'; ?>
    <script src="./src/conteiners/Carrinho/Carrinho.js"></script>
</body>
</html>