<?php

$dt = new DateTime();

$periodo = new DateInterval(P10D);
//  P   = informa que é periodo
//  10  = quantidade adiocionada no intervalo
//  D   = tipo de tempo adicionado( D->dias, y->Anos, m->meses, etc. )

echo "Data original da classe DateTime <br>";
echo $dt->format("D/M/Y H:i:s");

// Metedo para adicionar um periodo a data atual 
$dt->add($periodo);
echo "<br>";

echo "Data com adiçao de 15 dias na classe DateTime <br>";
echo $dt->format("d/m/y H:i:s");

// var_dump($dt);
