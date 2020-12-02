<?php
////////////////////////////////////
/* Tipos Bsicos*/
$nome = "Hcode";

$site = 'www.hcode.com.br';

$ano = 1990;

$salario = 5500.99;

$bloqueado = false;

//////////////////////////////////////
/* tipos compostos */
// 'array' e 'objetos'//

$frutas = array("abacaxi", "Laranja", "Manga");
//echo $frutas[2]; 

$nascimento = new DateTime(); 

//var_dump($nascimento); 

////////////////////////////////////////
/* tipos Especiais*/
// 'resouce' e 'null'//
$arquivo = fopen("exemplo03.php", "r");
//var_dump($arquivo);

$nula= null;

?>