<?php
include '../../php/config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['endereco'])) {
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
}


if (isset($_POST['export_csv'])) {
    $arquivo = 'clientes_exportados.csv';
    
    
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $arquivo . '"');
    $file = fopen('php://output', 'w');
    
    
    $cabecalho = array('ID', 'Nome', 'Email', 'Telefone', 'Endereço');
    fputcsv($file, $cabecalho);

    
    $sql = "SELECT * FROM clientes";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
            fputcsv($file, $row);
        }
        
    } else {
        echo "Nenhum dado encontrado na tabela 'clientes'.";
    }

    fclose($file);
    exit; 
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="">
        <button type="submit" name="export_csv">Exportar CSV da tabela</button>
    </form>
</body>
</html>