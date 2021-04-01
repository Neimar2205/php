<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "neimar","Nmysql");

//Uma transacao sempre esta atrelada a conecçao do banco.
$conn->beginTransaction();


$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario =:ID");

$id = "3";

$stmt->bindParam(":ID",$id );

    $stmt->execute();

/* 

    // Transaçao com passgem de variavel por referencia.
    // A ?(interrogaçao) no prepare recebe o index($id) do array na ordem que aparece. 
    $stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario = ?");

    $id = "3";
    $stmt->execute(array($id));
 */

//$conn->rollBack(); // Para quando ocorrer qualquer erro na transaçao.
$conn->commit(); // Para quando tudo der certo na transaço.

        echo "========================Dados Excluidos. OK!!=========================<br>";
?>