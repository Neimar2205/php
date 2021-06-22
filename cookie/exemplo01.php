<?php

$data = array(
    "empresa" => "PROGRAMAR EM FOCO"
);

setcookie("NomeDoMeuCookie", json_encode($data), time() + 3600);

echo "ok";
