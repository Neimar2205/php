<?php

$frase = "A repetição é mãe da retenção.";

$palavra="mãe";

$posicao = strpos($frase, "mãe"); // busca na frase qual a posição inicial da palavra "mãe".
echo "A posição inicial da palavra mãe é "; var_dump($posicao);
echo "<br>";

$texto = substr($frase, 0, $posicao); //substr faz a busca de do trecho a partir da posição 0 até a posição da variavel $posicao.//
var_dump($texto);
echo "<br>";

$texto2 = substr($frase, $posicao + strlen($palavra), strlen($frase));
var_dump($texto2);

?>
