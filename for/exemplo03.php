<?php

for($i = 0; $i < 500; $i += 5 ){

    // Com este if dentro do for e ignora o processamento do for no intervalo definido no if.
    if($i >= 200 && $i <=400) continue;
    
    //Com este if  dentro do for eu faço o laço interromper no valor definido.
    if( $i === 450) break;

    echo $i . "<br/>";
    
}

?>