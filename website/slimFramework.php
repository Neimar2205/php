<?php

require_once("vendor/autoload.php");

// Slim Framework é um framework usado para definição de rotas dentro do PHP.

//instancia do classe do Slim para 
$app = new \Slim\Slim();

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});


$app->run();

?>