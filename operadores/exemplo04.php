<?php
$a = 35;
$b = 55;

//$a = 55;
//$b = 55;

//$a = 55.0;
//$b = 55;

var_dump($a > $b);
echo "<br>";

var_dump($a < $b);
echo "<br>";

var_dump($a > $b);
echo "<br>";

// Com apenas 1 sinal de "=" o valor e atribuido a varivel receptora. No caso a varialvél $a.
var_dump($a = $b);
echo "<br>";

// Com 2 sinal de "=" (==) é feita a comparação do valores das variaveis.
var_dump($a == $b);
echo "<br>";
 
//Com 3 sinal de "=" (===) é feita a compração dos VALORES e do TIPO das vriáveis. 
var_dump($a === $b);
echo "<br>";

// Verifica se os "VALORES" SÃO DIFERENTES.
var_dump($a != $b);
echo "<br>";

// Verifica se os "VALORES E OS TIPOS" SÃO DIFERENTES.
var_dump($a !== $b);
echo "<br>";

?>