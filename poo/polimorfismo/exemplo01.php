<?php

abstract class Animal{

    public function falar(){
        return "Som";
    } 

    public function andar(){
        return "Andar";
        }
}

 class Cachorro extends Animal{
     public function falar(){
         return "Late";
     }
 }

 class Gato extends Animal{
    public function falar(){
        return "Mia";
    }
    
}

class Passaro extends Animal{
    public function falar(){
        return "Pia";
    }
    public function andar(){
        return "voar";
    }
}


    $teo = new Cachorro();
    echo $teo -> falar()."<br/>";
    echo $teo -> andar()."<br/>";

 echo "---------------------------------------------------------------<br/>";

    $pantro = new Gato();
    echo $pantro -> falar()."<br/>";
    echo $pantro -> andar()."<br/>";
echo "---------------------------------------------------------------<br/>";
$sabia = new Passaro();
echo $sabia -> falar()."<br/>";
echo $sabia -> andar()."<br/>";

?>