<?php
// Aqui  estabelecido a conecço com banco de dados.
// Os paramentros sao: endereço dos servidor, user, senha, e nome do banco
$conn = new mysqli("localhost", "neimar", "Nmysql", "dbphp7");

    // connect_error exibi qualquer erro nos paranmetros de conexo.
    if($conn-> connect_error){    
        echo "error". $conn->connect_error;  
    }

    $result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

    while($row = $result->fetch_array()){

        var_dump($row);
    }


   // $stmt->execute();


?>