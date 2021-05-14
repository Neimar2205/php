<?PHP

$filename = "usuraios.csv";

if(file_exists($filename)){

    $file = fopen($filename, "r");

    //recupera o arquio e gera o array
    $headers = explode(",",fgets($file));

   // var_dump($headers); teste em tela?


    $data = array();

    While($row = fgets($file)){
        $rowData = explode(",", $row);

        $linha = array();

        for($i = 0; $i < count($headers); $i++ ){

            $linha[$headers[$i]] = $rowData[$i];
        }

        array_push($data, $linha);
    }

    fclose($file);

    echo json_encode($data);

}
?>