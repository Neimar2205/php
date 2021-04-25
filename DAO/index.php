<?php
use date_format;
require_once('config.php');

//Aqui faz o select de toda a tabela
/* $sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios)
 */

/* 
 // Aqui faz o select de um cadastro na tabela tbusuarios passando o ID
$usuario = new Usuario();
$usuario->loadById(5);
echo $usuario; */

//    // Carrega lista de todos os usurios da tabela
//$listaUsuarios = Usuario::getList();
//echo json_encode($listaUsuarios);

//// Carrega uma lista de usuarios pesquisada pelo login
//$buscaUsuario = Usuario::search("ar");
//echo json_encode($buscaUsuario);

//Carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("Lala","1345");
 echo $usuario;


?>