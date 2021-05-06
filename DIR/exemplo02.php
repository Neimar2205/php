<?php

// A function scandir retorna um array();
$images = scandir("images");

//$img = $images;
//var_dump($img);

$data = array();

foreach ($images as $image) {
    if(!in_array($image, array(".", ".."))){

        //Busca o endereço/caminho path do arquivo.
        $filename = "images" . DIRECTORY_SEPARATOR . $image;

        $info               = pathinfo($filename);
        $info["size"]       = filesize($filename);
        $info["modified"]   = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"]        = "http://localhost/DIR/".str_replace("\\", "/",$filename); 

        array_push($data, $info);

    }
}
echo json_encode($data);

?>