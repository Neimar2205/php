<?PHP

//1º parametro localizaçao do arquivo, 2º tipo de açao executado no arquivo
// A variavel $file tipo resouce.
$file = fopen("log.txt","a+");

//Recebe 2 parametros: 1º resouce e o 2º sao dados que serao colocados no arquivo
fwrite($file, date("Y-m-d H:i:s") . "\r\n");


// Liberar/fechar o arquivo apos o processo
fclose($file);

echo "Arquivo criado com Sucesso";

?>