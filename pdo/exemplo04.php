<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "neimar","Nmysql");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD  WHERE idusuario =:ID");

$login= "Davi";
$pass = "dv1234";
$id = "2";


$stmt->bindParam(":LOGIN",$login );
$stmt->bindParam(":PASSWORD",$pass );
$stmt->bindParam(":ID",$id );

    $stmt->execute();
        echo "========================Dados Alterados. OK!!=========================<br>";
?>