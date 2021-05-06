<?php
spl_autoload_register(function($nameClass){
 
    var_dump($nameClass);

    $dirClass = "class";

    ////para configuracao do path no SO Windowns
    //$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass."php";

    // para configuraçao do path do projeto nos S.O. Unix e Linux
    $filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php"); 

    if (file_exists($filename)){

        require_once($filename);
    }

});


?>
