<?php

class Pessoa{

    public $nome = " Rasmus Lerdorf";
    protected $idade = 40;
    private $senha = "123456789";
    
    public function verDados(){
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }

}

$objeto = new Pessoa();

echo $objeto->nome. "<br/>"; //pode ser invocado diretamente de fora
echo $objeto->idade. "<br/>";// pode ser invocado somente dentro da propria classe ou classe filha
echo $objeto->senha. "<br/>";//pode ser invocado somente na propria classe 

?>