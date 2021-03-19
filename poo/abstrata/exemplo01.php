<?php

interface Veiculo {

public function acelerar($velocidade);
public function frenar($velocidade);
public function trocarMarcha($marcha);
}

// Uma classe abstrata nao pode ser instanciada
// Ela e usada  para definir o que os objetos  devem ter e devem fazer 
abstract class Automovel implements Veiculo {

    public function acelerar($velocidade){
        echo "O acelerou ate " . $velocidade . " km/h <br/>";
    }

    public function frenar($velocidade){
        echo "O veiculo frenou " . $velocidade . "km/h <br/>";
    }

    public function trocarMarcha($marcha){
        echo "A marcha engatada " . $marcha . "<br/>";
    }

}
 
class DelRey extends Automovel{
    public function empurrar(){

    }
}

$carro = new DelRey(); //Aqui vai funcionar 
//$carro = new Automovel();// Aqui nao funciona
$carro -> acelerar(200);
?>