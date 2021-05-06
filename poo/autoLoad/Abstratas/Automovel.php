<?php


interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
    }
    
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


?>