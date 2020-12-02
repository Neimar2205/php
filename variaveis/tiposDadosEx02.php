<?php

$nome1 = "João";
$sobrenome = " Rangel";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

// O comando "exit" abaixo demostrado, faz a função de break no PHP.
//exit;

echo $nome1;
echo "<br/>";

// comando abaixo "unset" é utilizado para destruir uma variaveis
unset($nome1);


// O comando abaixo "isset" verifica se uma variavel existe ou não.
if (isset($nome1)) {
    echo $nome1;
}

?>