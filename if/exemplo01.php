<?php

$qualSuaIdade = 150;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 150;

if($qualSuaIdade < $idadeCrianca){
echo "É uma crianca<br/>";

 }else if($qualSuaIdade < $idadeMaior){
    echo "É adolecente";

  }else if($qualSuaIdade < $idadeMelhor){
    echo "É adulto";

      }else{
        echo "É idoso";
        }
echo "<br/>";


//operador ternário
echo ($qualSuaIdade < $idadeMaior)? "Menor de Idade":"Maior de Idade";

?>
