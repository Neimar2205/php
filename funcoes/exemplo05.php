<?php

// Passagem de parametro por valor
echo "Passagem de parametro por valor. <br>";
$a = 10;
function trocaValor($b){
    $b += 50;
    return $b;
}
echo trocaValor($a);
echo "<br>";
echo $a;

 echo "<br>";
 echo "<br>";
 echo "<br>";


// Passagem de parametro por referencia.
// o Sibolo no PHP para referenciar uma variavel e o &
echo "Passagem de parametro por referencia. <br>";
$aa = 10;
function trocaValor1(&$bb){
    $bb += 50;
    return $bb;
}
echo trocaValor1($aa);
echo "<br>";
echo trocaValor1($aa);
echo "<br>";
echo $aa;


?>