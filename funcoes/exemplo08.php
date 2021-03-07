<?php

function soma (int ... $valores):string {
    return array_sum($valores);
}

// function soma (string ... $valores):string {
//     return array_sum($valores);
// }

// function soma (int ... $valores):float {
//     return array_sum($valores);
// }

// function soma (int ... $valores):boolean {
//     return array_sum($valores);
//}



echo '<br>';

echo var_dump(soma(2, 2));
echo '<br>';

echo var_dump (soma(15, 34));
echo '<br>';

echo var_dump (soma(5, 3.77));
echo '<br>';

?>