<?php

$cep = "24325150";

$link = "https://viacep.com.br/ws/$cep/json";

// Aqui é estartado a interface api/biblioteca cURL.
$ch = curl_init($link);

curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );

//Esta opção ignora a validação de segurança.
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 );

$reponse = curl_exec($ch);

curl_close($ch);

$data = json_decode($reponse, true);

echo "Objeto inteiro do array";
print_r($data);

echo "</br></br>";
echo "<hr>" ;
echo "acessa o índece do objeto. Aqui o logradouro.</br>";
print_r($data['logradouro']);

?>