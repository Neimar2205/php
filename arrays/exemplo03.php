<?php

$pessoas = array();

array_push($pessoas,array('nome'=>'Joao', 'idade'=>20));

array_push($pessoas,array('nome'=>'Glaucio', 'idade'=>25));

echo " mostra array completo ";
print_r($pessoas);
echo "<br>";

echo " mostra apenas a pessoa do indice [0] ";
print_r($pessoas[0]);
echo "<br>";

echo " mostra apenas o nome refenciado pelo indice[0]  "; 
print_r($pessoas[0]['nome']);


?>