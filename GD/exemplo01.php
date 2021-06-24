<?php

// Atenção: A função header deve ser comentada na situação do código apresentar algum erro.
// Normalmente ela deve ser a ultima parte do código do arquivo a ser implementado. Pois, para correção de erros, as respectivas mensagens são inelegiveis.
header("Content-Type: image/png");

//Cria a imagem e defini o tamanho. Tamanho é definido em px.
$image =  imagecreate(200, 100);


// Definir as cores. 
//OBs.: A 1ª cor definida sempre sera a cor de fundo da image.
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

// Função para o carregamento da imagem, definição da fonte(TTF) e posição do texto.
imagestring($image, 5, 20, 20, "Curso PHP 7", $red);


// Esta função tem que ser correspondente ao formato definido no header.
// aqui e onde o php faz a pintura.
imagepng($image);

imagedestroy($image);
