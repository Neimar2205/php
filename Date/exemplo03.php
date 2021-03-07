<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

// configuracao do padrao de data.
// Ver tabela de formatacao na documentacao do PHP
echo strftime("%a, %b,%g");
echo "<br><br><br>";

echo " Agui com a funçao ucwords(Tornar a primeira letra maiuscula)<br>";
echo ucwords(strftime("%a, %b,%g"));

?>