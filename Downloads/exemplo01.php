<?php
 // aqui guarda o link da image
 $link = "https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Tux.svg/1200px-Tux.svg.png";

 //aqui pega o conteudo da imagen apontada pelo link
 $content = file_get_contents($link);

 //var_dump($content);

 // Aqui ocorre a interpretaçao do conteudo. 
 //Transforma o conteudo em um arquivo real(define o tamanho, tipo, tipo de imagem)
 $parse = parse_url($link);

 //var_dump($parse);

 //
 echo "</br>";
 //var_dump(basename($parse["path"]));

//pega somente o nome do arquivo dentro do path do arquivo
 $basename = basename($parse["path"]);

 //cria a copia ou gera o arquivo do conteudo baixado no disco.
 $file = fopen($basename, "w+");

 //Escrever dentro do arquivo // reconstroi o arquivo em binario.
 fwrite($file, $content);

 //fecha o arquivo
 fclose($file);

?>

<img src="<?=$basename?>">