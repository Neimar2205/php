<?php
<<<<<<< HEAD


/* $estados = array("SP","PB","RS");
echo $estados[5]; */
error_reporting(E_ALL & E_NOTICE);

$nome = $_GET["nome"];

echo "$nome";
=======
//Aqui é definido como é tratato o erro(neste exemplo a função defini que o erro de Notice não sera exibido na tela)
error_reporting(E_ALL & ~E_NOTICE);


//gerra um Notice= na tela se não for tratado com a função error_reporting().
$testeErroNotice = $_GET["testeErroNotice"];

echo $testeErroNotice;


?>
>>>>>>> f025d8faf3a892633068fb103167bee16a0d9016
