<?php
// Este arquivo se trata da aula de INTERPOLAÇÃO DE VARIÁVEIS no PHP//
//INTERPOLAÇÃO é um recurso exclusivo do PHP. //
//Quando o texto é colocado entre aspas duplas("") o PHP verifica se existe alguma variável e EXIBE O VALOR/CONTEUDO desta(as) variavel(veis). //
//Quando o texto é colocado entre aspas simples('') o PHP exibe o nome desta(as) variável(veis).///

$nome = "HCODE";  // entre aspas duplas.//
$nome2 = 'Treinamentos'; //entre aspas simplas//

var_dump($nome, $nome2);

echo "ABC $nome"; 

?>
