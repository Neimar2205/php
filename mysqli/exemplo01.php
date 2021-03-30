<?php
// Aqui  estabelecido a conecço com banco de dados.
// Os paramentros sao: endereço dos servidor, user, senha, e nome do banco
$conn = new mysqli("localhost", "neimar", "Nmysql", "dbphp7");

    // connect_error exibi qualquer erro nos paranmetros de conexo.
    if($conn-> connect_error){
    
        echo "error: ". $conn->connect_error;  
    }

// o metodo "prepare" prepara todos os comandos, Create-update-delete no banco.
    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");
    $stmt->bind_param("ss", $login, $pass);

    $login = "user";
    $pass = "123456";
    $stmt->execute();


    // apos a criaçao do prepare, basta passar os novo paramente e chamar o execute() para realizar alteraçes no banco.
    $login = "root";
    $pass = "SENHA";

    $stmt->execute();


?>