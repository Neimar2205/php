<?php
//// funçoes Anonimas

function teste($callback){
// processo lento

// Aqui e feita a chamada da variavel como funçao anomima.
//Como a variavel esta como parmetro e 
    $callback();
}

teste(function(){
echo "terminou!!";
}
);


?>