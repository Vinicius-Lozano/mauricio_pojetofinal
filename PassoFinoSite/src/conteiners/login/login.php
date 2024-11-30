<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="../../../Trabalho.css">
</head>
<body>
    <?php include "../../navbar.php" ?>
    <h1>Cadastro de Cliente</h1>
    <form action="/mauricio_projetofinal/PassoFinoSite/src/conteiners/login/insert.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone"><br><br>

        <label for="endereco">Endereço:</label>
        <textarea name="endereco" id="endereco"></textarea><br><br>

        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>