<?php
 
  // start da sessao atraves do arquivo de configuraço config.php.
 //require_once('config.php');

//start da sessao direto da pagina.
 session_start(); 
 
 echo $_SESSION["nome"];

?>