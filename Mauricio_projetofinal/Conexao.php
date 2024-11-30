<?php
$host = "localhost"; // Servidor do banco
$usuario = "root"; // Usuário do banco
$senha = ""; // Senha do banco
$banco = "loja"; // Nome do banco de dados

// Criar conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
