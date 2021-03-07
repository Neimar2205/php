<?php

function ola ($texto, $periodo = "Bom dia!!!"){

    return "Ola $texto! $periodo!! <br>";

}

//Se primeiro parametro nao tiver valor padrao(pre-definido).
// Quando passado sem argumento para o 1° parametro vai dar erro.
 //echo ola(); 

echo ola(" ");
echo ola("Glaucio");
echo ola("Joao");


?>