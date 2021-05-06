<?php


Class Endereco {

private $logradouro;
private $numero;
private $cidade;

    // Metodo MAGICO construtor(PHP 7 em diante). 
    // instancia o objeto com todos os metodos pradao. 
    //Ex. metodos get e set dos atributos. 
    public function __construct($logradouro, $numero, $cidade){

        $this->logradouro     = $logradouro;
        $this->numero        = $numero;       
        $this->cidade        = $cidade; 

    }


    //Metodo responsal por destuir o objeto no termino de sua execuço.
    public function __destruct(){
        var_dump("DETRUCT");
    }

    public function __toString(){
        return $this->logradouro . "," . $this->numero. "," . $this->cidade;
    }

}

$meuEndereco = new Endereco("Rua Austria", "110", "Santos");

//var_dump($meuEndereco);
//
//unset($meuEndereco);

echo $meuEndereco;

?>