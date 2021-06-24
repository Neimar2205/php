<?php

header("Content-type: image/jpg");

$image = imagecreatefromjpeg("certificado.jpg");

$colorTitle = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "Certificado", $colorTitle);
imagestring($image, 5, 400, 300, "Daniel Villar Medeiros", $colorTitle);
imagestring($image, 3, 400, 370, utf8_decode("Concluido em ") . date("d/m/Y"), $colorTitle);

//Aqui escreve na imagem as informaçoes definidas acima. Nao cria arquivo
imagejpeg($image);

/* // Aqui, nesse formato, ele gera um arquivo com a data de sua driaço no nome.
imagejpeg($image, "certificado-" . date("Y-m-d") . ".jpg", 10); */

imagedestroy($image);
