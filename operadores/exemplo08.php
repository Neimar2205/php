<?php

// Executa as operações na ordem de prioridades = Multiplicação - Divisão - Soma ou Subtração.
$resultadoA = 10 + 3 / 2;
echo "$resultadoA <br><br>";

// Executa na ordem que aparece
$resultadoB = 10 + 3 - 2;
echo "$resultadoB <br><br>";

//Executa na ordem que aparece
$resultadoC = 10 - 3 + 2;
echo "$resultadoC <br><br>";


//Executa primeiro o que está priorizados com os ()parenteses.
$resultadoD = (10 + 3) / 2;
echo "$resultadoD <br><br>";

//Executa primeiro o que esta priorizado com os ()parenteses.
$resultadoE = (10 + 3) * 2;
echo "$resultadoE <br><br>";

// Executa na ordem que aparece.
$resultadoF = 10 * 3 / 2;
echo "$resultadoF <br><br>";

//Executa na ordem que aparece.
$resultadoG = 10 / 3 * 2;
echo "$resultadoG <br><br>";




?>