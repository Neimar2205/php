<?php

$dir1="dir01";
$dir2="dir02";

// cria os diretórios
if(!is_dir($dir1)) mkdir($dir1);

if(! is_dir($dir2)) mkdir($dir2);

$filename= "NomeDoArquivo.txt";

// Aqui é criado o arquivo. Mas antes o if faz um verificação se o arquivo existe.
if(!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)){
    //aqui é criado o arquivo
    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");
    fwrite($file, date("Y-m-d H:i:s"));

    fclose($file);
}
rename($dir1 . DIRECTORY_SEPARATOR . $filename,  /// origem do arquivo
        $dir2 . DIRECTORY_SEPARATOR . $filename); /// destino do arquivo

        echo "Aquivo " . '"' . $filename .'"' . " movido com sucesso.";

?>