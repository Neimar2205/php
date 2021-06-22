<?php
<<<<<<< HEAD
function error_handler($code, $message, $file, $line)
{

    echo json_encode(array(
        "code" => $code,
        "message" => $message,
        "file" => $file,
        "line" => $line
    ));
}

set_error_handler("error_handler");

echo 100 / 0;
=======

function error_handler($code, $message, $file, $line){
    echo json_encode(array(
        "code"     =>$code,
        "message"  =>$message,
        "file"     =>$file,
        "line"     =>$line
    ));  

}

set_error_handler("error_handler");
$total = 100 / 0;




?>
>>>>>>> f025d8faf3a892633068fb103167bee16a0d9016
