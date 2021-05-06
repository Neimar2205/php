<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "neimar","Nmysql");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login= "Larha";
$pass = "giovanna1234";

$stmt->bindParam(":LOGIN",$login );
$stmt->bindParam(":PASSWORD",$pass );

    $stmt->execute();
        echo "========================Insert OK!!=========================<br>";
?>