<?php
// Este arquivo se trata da aula de INTERPOLAÇÃO DE VARIÁVEIS no PHP//
//INTERPOLAÇÃO é um recurso exclusivo do PHP. //
//Quando o texto é colocado entre aspas duplas("") o PHP verifica se existe alguma variável e EXIBE O VALOR/CONTEUDO desta(as) variavel(veis). //
//Quando o texto é colocado entre aspas simples('') o PHP exibe o nome desta(as) variável(veis).///

$nome = "aspas duplas";  // entre aspas duplas.//
$nome2 = 'aspas simples'; //entre aspas simplas//

var_dump($nome, $nome2);
echo "<br>";

var_dump("ABC $nome");
echo "<br>";

var_dump('ABC $nome2');
echo "<br>";


echo "ABC $nome. <br>";

echo 'ABC $nome2.';
