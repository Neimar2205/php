<?php

/* //Acesso direto se validaço. Se nao existir o cookie vai apresentar erro.
$_COOKIE['NomeDoMeuCookie'];
var_dump($_COOKIE); */

// Acesso com validacao. So executa se o cookie existir.
if (isset($_COOKIE["NomeDoMeuCookie"])) {
    echo "transforma o conteudo do cookie em um objeto</br>";
    var_dump(json_decode($_COOKIE["NomeDoMeuCookie"]));
    echo "</br></br>";


    echo "transforma o conteudo do cookie em um array</br>";
    var_dump(json_decode($_COOKIE["NomeDoMeuCookie"], true));

    echo "</br></br>";
    echo "acessa o atributo do objeto atraves da chave 'empresa' </br>";
    $obj = json_decode($_COOKIE["NomeDoMeuCookie"]);
    echo $obj->empresa;
}
