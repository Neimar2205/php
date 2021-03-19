<?php
/// pode  ser feito de DUAS MANEIRAS.

function incluirClasses ($nomeClasses){
    if(file_exists($nomeClasses.".php")=== true){
        require_once($nomeClasses.".php");
    }
}

// Crinado uma funçao a parti e invocando esta no parametro da sql_autoload_register.
spl_autoload_register("incluirClasses");

// 2º Passando uma funçao direta como parametro da sql_autoload_register
spl_autoload_register(function($nomeClasses){
    if(file_exists("Abstratas".DIRECTORY_SEPARATOR.$nomeClasses.".php")=== true){
        require_once("Abstratas".DIRECTORY_SEPARATOR.$nomeClasses.".php");
    }

});
    
    $carro = new DelRey();
    
    $carro->acelerar(80); 
    
    


?>