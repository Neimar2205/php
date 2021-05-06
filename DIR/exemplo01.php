<?php

$name = "images";

if(! is_dir($name) ){

    mkdir($name);

    echo "Diretrio $name criado com sucesso!!";

}else{
    // Este comando remove o diretorio.
    //rmdir($name);
    echo "Ja existe o diretorio : $name foi removido";
}

?>
