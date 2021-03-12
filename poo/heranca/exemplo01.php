<?php

Class Documento{
private $numero;

public function  getNumero(){
    return $this->numero;
}

public function setNumero($n){
    $this->numero = $n;
}

}

Class CPF extends Documento{

    public function validar():bool{
        $numeroCPF = $this->getNumero(); //pegar o numero na classe pai Documento
        // Aqui vai a validacao do CPF
        return true;
    }
}

$doc = new CPF();
$doc -> setNumero("111222333-44");
var_dump($doc->validar());

echo '<br/>'; 

echo $doc->getNumero();

?>