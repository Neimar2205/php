<?php


require_once("vendor/autoload.php");

// namespace
use Rain\Tpl;
//use PHPMailer\PHPMailer\PHPMailer;

// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
    //"debug"         => true, // set to false to improve the speed
);

//
Tpl::configure( $config );

// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign( "name", "Obi Wan Kenoby" );
$tpl->assign( "version", PHP_VERSION );

// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

/* Chamada direta entre arquivos no mesmo diretórios */
// draw the template / nome do arquivo template
$tpl->draw( "index");

/*  Chamada por  */
//$html = $tpl->draw( "index.html", true);
 
?>
