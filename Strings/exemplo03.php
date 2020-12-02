<?php
 $empresa = "Hcode treinamentos, Empresa ensino de programação";
 echo $empresa ;
echo "<br>";

$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);
echo $empresa;

?>
