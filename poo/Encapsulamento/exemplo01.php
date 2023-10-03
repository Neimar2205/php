<?php

class Pessoa{

    public $nome = " Rasmus Lerdorf"; //pode ser invocado diretamente de fora
    protected $idade = 40;// pode ser invocado somente dentro da propria classe ou classe filha
    private $senha = "123456789";//pode ser invocado somente na propria classe 
    
    public function verDados(){
        echo $this->nome . "no metodo<br/>";
        echo $this->idade . "no metodo<br/>";
        echo $this->senha . "no metodo<br/>";

    }

}

$objeto = new Pessoa();
echo $objeto->nome. "<br/>"; //pode ser invocado diretamente de fora
echo $objeto->idade. "<br/>";// pode ser invocado somente dentro da propria classe ou classe filha
echo $objeto->senha. "<br/>";//pode ser invocado somente na propria classe 

?>