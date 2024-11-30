<?php
include 'Conexao.php';

// Obter dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografar senha
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];

// Inserir no banco de dados
$sql = "INSERT INTO clientes (nome, email, senha, cep, endereco) VALUES ('$nome', '$email', '$senha', '$cep', '$endereco')";

if ($conn->query($sql) === TRUE) {
    echo "Cliente cadastrado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
