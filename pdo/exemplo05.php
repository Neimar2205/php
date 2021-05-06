<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "neimar","Nmysql");

$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario =:ID");

$id = "1";

$stmt->bindParam(":ID",$id );

    $stmt->execute();
        echo "========================Dados Excluidos. OK!!=========================<br>";
?>