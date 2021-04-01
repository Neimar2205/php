<?php
// Para conneço do PHP com o Banco de Dados SQL SERVER da Microsoft. 
// Usando o PDO do PHP a unica alteraçao de codigo nescessaria para mudar de banco e na string de conecço. 
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS; ConnectionPooling=0", "user do banco","senha de login");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

    $stmt->execute();

    $results = $stmt-> fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row) {
        foreach ($row as $key => $value) {
        echo "<strong>".$key.":</strong>" . $value. "<br/>";
        }
        echo "=================================================<br>";
    }

?>