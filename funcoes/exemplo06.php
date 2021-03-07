<?php

$pessoa = array('nome'=>'Joao',
                 'idade' => 20
                );

echo 'Passsagem de  parametro por valor(o valor da variavel e carregado no parametro)';
echo '<br>';
    foreach ($pessoa as $value) {
        if(gettype($value) === 'integer') $value += 10;
        echo $value. '<br>';    
    }

print_r($pessoa);
echo '<br>', '<br>';

echo 'Passagem de paramentro por referencia(carrega o endereço da variavel no paramentro).';
echo '<br>';
foreach ($pessoa as &$value) {
    if(gettype($value) === 'integer') $value += 10;
    echo $value. '<br>';    
}

print_r($pessoa);
echo '<br>';

var_dump($pessoa);



?>