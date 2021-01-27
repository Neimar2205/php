<?php

$a = null;
echo "variavél 'a' = $a"; 
echo "<br>";
$b=null;
$c = null;
$d = 20;

var_dump( $a ?? $b ?? $c ?? $d);


?>