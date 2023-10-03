<?php

class Pessoa{

    public $nome;

    public function falar(){
 
        return "O meu e' ".$this->nome;
    }
}

$neimar = new Pessoa(); // Instancia a o objeto
$neimar->nome = "Neimar Silva";// Coloca o nome no atributo $nome;
echo $neimar->falar(); // invoca o metodo/açao falar() do objeto instanciado

echo "<br>";
$paulo = new Pessoa; // Instancia a o objeto
$paulo->nome = "Paulo Roberto";// Coloca o nome no atributo $nome;
echo $paulo->falar(); 

?>