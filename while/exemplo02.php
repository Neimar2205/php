<?php

$total = 150;
$desconto = 0.9;

do{

    $total *= $desconto;// aqui e aplicado o descomto ate a condicao ser false e sair do loop.
} while($total > 100);

 echo $total;
 
?>