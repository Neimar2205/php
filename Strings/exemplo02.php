<?php

$nome = "Neimar Silva";

$nome = strtoupper($nome);
echo $nome;
echo "<br>";

$nome = strtolower($nome);
echo $nome;
echo "<br>";

$nome = ucwords($nome);
echo $nome . " ucwords|";
echo "<br>";

$nome = strtolower($nome); /// aqui deica tudo minusculo.//
$nome = ucfirst($nome);
echo $nome . " Aqui ucfirst";
echo "<br>";
