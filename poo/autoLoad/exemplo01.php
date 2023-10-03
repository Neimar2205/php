<?php
// // Forma até o PHP 7 Removido no PHP 8
// function __autoload($nomeClasse){
//     var_dump($nomeClasse);
//     require_once("$nomeClasse.php");
// }

// Forma coreta de fazer o autoload a partir do PHP8
// neste exemplo a classe Automovél está na mesma pasta
spl_autoload_register(function ($nomeClasse) {
    require_once ("$nomeClasse.php");
});

$carro = new DelRey();

$carro->acelerar(80);




?>