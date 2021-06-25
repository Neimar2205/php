<?php

header("Content-type: image/jpg");

$image = imagecreatefromjpeg("certificado.jpg");

$colorTitle = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 35, 0, 450, 150, $colorTitle, "fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf", "Certificado");
imagettftext($image, 32, 0, 440, 500, $colorTitle, "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf", "Daniel Villar Medeiros");
imagestring($image, 3, 400, 370, utf8_decode("Concluido em ") . date("d/m/Y"), $colorTitle);

// //Aqui, com este parametros a funçao gera um arquivo e nao exibi 
//imagejpeg($IMAGE, "Certificado-" . data("Y-m-d") . "jpg", 80);
imagejpeg($IMAGE);


imagedestroy($image);
