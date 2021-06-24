<?php
$cep = "35290000";

//endereço de interface com a  API
$link = "https://viacep.com.br/ws/$cep/json";

//Chama a biblioteca, ou seja, starta os serviços da da biblioteca cURL.
$ch = curl_init($link);


/// opçoes para a tratativa do serviço. precisa destas opçoes para funcionar;

// ch = biblioteca iniciada,
// option = informa o tipo de transaçao a ser executada(com ou sem return),
// value = bool que informa se vc quer ou no a resposta
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//ch =  informa qual biblioteca foi iniciada,
//option = CURLOPT_SSL_VERIFYPEER => diz que nao e preciso validar o ssl da requisiçose exixte certificado de seguraça: Tipo HTTPS,
// value
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);
echo "Aqui  acessado o objeto no formato de array</br>";
print_r($data);

echo "</br></br> Aqui e acessado um indice de posiçao do array. no caso a '[localidade]': </br>";

print_r($data["localidade"]);
