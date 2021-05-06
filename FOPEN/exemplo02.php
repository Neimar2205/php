<?PHP

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

//print_r($usuarios);

$headers = array();

  // Percorre apenas a 1ª linha do objeto tb_usuarios alocado na variavel $usuarios
  // Monta o Cabeçlho do arquivo.
foreach($usuarios[0] as $key => $value){
    array_push($headers, ucfirst($key));
}

 $file = fopen("usuraios.csv", "w+");
  // Escreve/ler o cabeçalho do arquivo gerado: Ler se o arquivo ja existir. Escreve/cria se no existir.
 fwrite($file,implode(",", $headers));

    // Percorre o objeto $usuarios e retorna as linhas
 foreach ($usuarios as $row) {
    $data = array();
         //percorre os campos de cada linha e retorna o seu valor 
        foreach ($row as $key => $value) {

            array_push($data, $value);
        } //End foreach de colunas
        // Escreve os valores encontradas nos campos(de cada coluna) no arquivo
        fwrite($file, implode(",", $data) . "\r\n");


 } //End Foreach de linha
 
 fclose($file);



 //print_r($headers);
 echo implode(",", $headers);

?>