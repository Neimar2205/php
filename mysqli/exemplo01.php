<?php
// Aqui é estabelecido a conecçao com banco de dados.
// Os paramentros sao: endereço dos servidor, user, senha, e nome do banco
$conn = new mysqli("localhost", "userDB", "senhaLogin", "dbphp7");

    // connect_error verifica exibi qualquer erro nos paranmetros de conexo.
    if($conn-> connect_error){

        echo "error: ". $conn->connect_error;
    }

if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
}

// o metodo "prepare" prepara todos os comandos, Create-update-delete no banco.
    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");
    $stmt->bind_param("ss", $login, $pass);

// Os valores a serem inseridos, por segurança, não podem ser inseridos diratamente no bind_param.
    $login = "user";
    $pass = "123456";
    $stmt->execute();


    // apos a criaçao do prepare, basta passar os novo paramente e chamar o execute() para realizar alteraçes no banco.
    $login = "user2";
    $pass = "SENHA2";

    $stmt->execute();


?>