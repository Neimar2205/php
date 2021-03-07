<?php

class Carro{

private $modelo;
private $motor;
private $ano;

    public function getModelo(){ return $this->modelo;   }
    public function setModelo($modelo){ $this->modelo = $modelo; }

    public function getMotor():float{ return $this->motor; }
    public function setMotor($motor){$this->motor = $motor;}

    public function getAno():int{ return $this->ano; }
    public function setAno($ano){$this->ano = $ano;}
    
        public function exibirCarros(){
            
                return array(
                    "modelo" => $this->getModelo(),
                    "motor" => $this->getMotor(),
                    "Ano" => $this->getAno()
                );
        }
}
        
$logan = new Carro();
$logan->setModelo("Logan sedan");
$logan->setMotor("1.6CC 16v");
$logan->setAno("2017");

echo "Com print_r<br>";
print_r($logan->exibirCarros());
echo"<br>";

echo "Com var_dump<br>";
var_dump($logan->exibirCarros());



?>