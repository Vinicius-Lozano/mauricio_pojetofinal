<?php
include '/mauricio_projetofinal/PassoFinoSite/src/php/config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $sql = "INSERT INTO clientes (nome, email, telefone, endereco) 
            VALUES ('$nome', '$email', '$telefone', '$endereco')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();
}
?>