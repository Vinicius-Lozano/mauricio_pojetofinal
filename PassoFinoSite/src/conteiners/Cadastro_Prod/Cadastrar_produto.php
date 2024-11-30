<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" href="../../../Trabalho.css">
</head>
<body>

    <?php include "../../navbar.php"?>
    <form method="POST" action="/mauricio_projetofinal/PassoFinoSite/src/conteiners/Cadastro_prod/inserir_produto.php" enctype="multipart/form-data">
        <label for="nomeProduto">Nome do Produto:</label>
        <input type="text" name="nomeProduto" id="nomeProduto" required><br><br>
        
        <label for="descricaoProduto">Descrição do Produto:</label>
        <textarea name="descricaoProduto" id="descricaoProduto"></textarea><br><br>
        
        <label for="precoProduto">Preço do Produto:</label>
        <input type="number" name="precoProduto" id="precoProduto" step="0.01" required><br><br>
        
        <label for="imagemProduto">Imagem do Produto (opcional):</label>
        <input type="file" name="imagemProduto" id="imagemProduto"><br><br>
        
        <button type="submit">Cadastrar Produto</button>
    </form>

</body>
</html>
