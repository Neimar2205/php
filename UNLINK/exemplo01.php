<?PHP

$file = fopen("teste.txt", "w+");

echo "Arquivo $file criado com sucesso </br>";


fclose($file);

//Se usaddo dessa forma sera removido o ponteiro para o arquivo. $file resource
//unlink($file);

unlink("teste.txt");
 echo "Arquivo removido com sucesso";
?>