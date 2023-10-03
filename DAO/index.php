<?php
//use date_format;
require_once('config.php');

// Aqui faz o select de toda a tabela
// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);



 // Aqui faz o select de um cadastro na tabela tbusuarios passando o ID
// $usuario = new Usuario();
// $usuario->loadById(5);
// echo $usuario;

    // Carrega lista de todos os usurios da tabela
//$listaUsuarios = Usuario::getList();
//echo json_encode($listaUsuarios);

//// Carrega uma lista de usuarios pesquisada pelo login
//$buscaUsuario = Usuario::search("ar");
//echo json_encode($buscaUsuario);

////Carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("user2","SENHA2");
// echo $usuario;

////Sem uso do construtor definido na classe Usuario. Usa apenas o construtor default.
//$aluno = new Usuario;
//$aluno->setDeslogin("aluno12");
//$aluno->setDessenha("senhaAluno12");
//$aluno->insert();
//echo ($aluno);

//// Usando o metodo construtor definido na classe usuario. Para inserir dados na tabela.
//$aluno = new Usuario("aluno2", "senhaAluno2");
//$aluno->insert();
//echo $aluno;

//// Atualizar os dados cadastrais de um determinadado usurio
//$usuario = new Usuario();
//$usuario->loadById(3);
//$usuario->update("aluno11", "senhaAluno11");
// echo ($usuario);

$usuario = new Usuario();
$usuario->loadById(3);
$usuario->delete(3);
echo ($usuario);


?>