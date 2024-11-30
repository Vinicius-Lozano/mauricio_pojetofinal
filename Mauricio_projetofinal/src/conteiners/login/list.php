<?php

include 'config.php';


$sql = "SELECT id, nome, email, telefone, endereco FROM clientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Endereço</th>
            </tr>";
    
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['nome'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['telefone'] . "</td>
                <td>" . $row['endereco'] . "</td>
              </tr>";
    }
    
    echo "</table>";
} else {
    echo "Nenhum cliente encontrado.";
}


$conn->close();
?>
