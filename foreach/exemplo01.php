<?php

$meses = array("Janeiro", "Fevereiro","Março",
"Abril", "Maio","Junho", "Julho", "Agosto",
 "Setembto","Outubro", "Novembro", "Dezembro");

//  //Aqui foreach simples.
// foreach ($meses as $mes) {

//  echo "O mes e ".$mes."<br>";
 
// }

// Aqui um foreach com aplicaço de indice
foreach ($meses as $index => $mes) {
    echo "Indice: ".$index. "<br>";
    echo "O mes e ".$mes."<br><br>";
    
   }

?>