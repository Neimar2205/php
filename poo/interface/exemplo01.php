<?php
// Uma INTERFACE serve como um contrato com uma classe.
// A INTERFACE determina o que e preciso ser feito, mas não diz como deve ser feito.
//Todos os metodos declarados na INTERFACE precisam ser implementados nas classes com a mesma assinatura.


interface Veiculo {

public function acelerar($velocidade);
public function frenar($velocidade);
public function trocarMarcha($marcha);
}


class Civic implements Veiculo {

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
 
$carro = new Civic();

$carro->trocarMarcha(1);

?>