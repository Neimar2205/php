<?php
$json = '[{"nome":"Joao","idade":20},{"nome":"Glaucio","idade":25}]';

// Sem o "true" os dados so transformados em objetos na converçao para array.
/*$data = json_decode($json);*/

$data = json_decode($json, true);


var_dump($data);

?>