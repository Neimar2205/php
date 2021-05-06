<?php

require_once("Config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Almeida");
$cad->setEmail("dijalma@hcode.com.br");
$cad->setSenha("123456");

$cad -> registraVenda();

?>