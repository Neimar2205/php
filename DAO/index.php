<?php
use date_format;
require_once('config.php');

//Aqui faz o select de toda a tabela
/* $sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios)
 */

 // Aqui faz o select de um cadastro na tabela tbusuarios passando o ID
$usuario = new Usuario();
$usuario->loadById(5);
echo $usuario;

?>