<?php

function soma (int ... $valores){
    return array_sum($valores);
}

echo '<br>';
echo soma(2, 2);
echo '<br>';
echo soma(15, 34);
echo '<br>';
echo soma(5, 3.77);

echo '<br>';

?>