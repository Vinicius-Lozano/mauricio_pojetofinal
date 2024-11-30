<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="../../../Trabalho.css">
</head>
<body>
    <?php include "../../navbar.php" ?>
    <h1>Cadastro de Clientes</h1>
    <form action="Cadastrar_cliente.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>

        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep" maxlength="8" required onblur="buscarCEP()">

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" readonly>

        <button type="submit">Cadastrar</button>
    </form>
    <script src="buscarCep.js"></script>
    <script src="ValidarFormulario.js"></script>
</body>
</html>