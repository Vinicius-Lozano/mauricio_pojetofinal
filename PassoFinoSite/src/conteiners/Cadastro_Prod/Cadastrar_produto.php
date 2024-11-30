<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" href="../../../Trabalho.css">
</head>
<body>
    <?php include "../../navbar.php" ?>
    <h1>Cadastrar Produto</h1>
    <form action="/mauricio_projetofinal/PassoFinoSite/src/conteiners/Cadastro_Prod/inserir_produto.php" method="POST" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required></textarea><br><br>

        <label for="preco">Preço:</label>
        <input type="number" step="0.01" id="preco" name="preco" required><br><br>

        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" required><br><br>

        <label for="imagem">Imagem:</label>
        <input type="file" id="imagem" name="imagem"><br><br>

        <button type="submit">Cadastrar Produto</button>
    </form>
</body>
</html>
