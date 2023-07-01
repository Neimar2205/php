<?php
////////////////////////////////////
/* Tipos Bsicos*/
// Int, string, float e boolean

//string
$nome = "Hcode";

//String
$site = 'www.hcode.com.br';

//int
$ano = 1990;

//float
$salario = 5500.99;

//boolean
$bloqueado = false;

//////////////////////////////////////
/* tipos compostos */
// 'array' e 'objetos'//

//array
$frutas = array("abacaxi", "Laranja", "Manga");
//echo $frutas[2]; 

//objeto
$nascimento = new DateTime();

//var_dump($nascimento); 

////////////////////////////////////////
/* tipos Especiais*/
// 'resource' e 'null'//
$arquivo = fopen("exemplo03.php", "r");
//var_dump($arquivo);

$nula = null;
