<?php

class Documento{

private $numero;

public function getNumero(){
        return $this->numero;
    }
public function setNumero($numero){
     $resultado = Documento::validarCPF($numero);
     if ($resultado === false){
         throw new Exception("CPF informado no valido");
     } 
     $this->numero = $numero;        
    }

    // verificar se o cpf foi informado
public static function validarCPF($cpf):bool{
    if(empty($cpf)) {
        return false;
    }
    //Elimina possivl mascara
    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    //Verifica se o numero de digitos informados  igual a 11
    if (strlen($cpf) != 11) {
        echo "length";
        return false;
    }
    
    /*Verifica se nenhuma das eguencias invalidas abaixo
     * foi informada. Caso afirmativo, return fale
    */
    else if ($cpf == '00000000000' || 
             $cpf == '11111111111' || 
             $cpf == '22222222222' || 
             $cpf == '33333333333' || 
             $cpf == '44444444444' || 
             $cpf == '55555555555' || 
             $cpf == '66666666666' || 
             $cpf == '77777777777' || 
             $cpf == '88888888888' || 
             $cpf == '99999999999') {
        return false;
    
    // Calcula os digitos verificadors para ver se o cpf  valido
     } else {   
         
        for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
 
        return true;
    }


}

}
// Aqui e feita uma intanciaçao de objeto derivado da classe Documento()
/*$cpf = new Documento();
 $cpf-> setNumero("01410098613");

 var_dump($cpf->getNumero())
*/

// validar o CPF direto dentro da classe Documento(). Sem gerar uma instamcia
var_dump(Documento::validarCPF("01410098613"))
?>