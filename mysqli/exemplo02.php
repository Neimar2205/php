<?php
// Aqui  estabelecido a conecço com banco de dados.
// Os paramentros sao: endereço dos servidor, user, senha, e nome do banco
$conn = new mysqli("localhost", "neimar", "Nmysql", "dbphp7");

    // connect_error exibi qualquer erro nos paranmetros de conexo.
    if($conn-> connect_error){    
        echo "error". $conn->connect_error;  
    }

    $result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

   /*  // a funçao fetch_array() retorna o dados com indice(posicao) do array e tambem indice(coluna) dos dados
    // Com a constante MYSQLI_ASSOC retorna apenas i indice por Coluna/  
    while($row = $result->fetch_array(MYSQLI_ASSOC)){

        var_dump($row);
    }
 */

    /* 
    // Para retorna os dados com o indice(coluna) sem a necessidade de passar a constante MYSQLI_ASSOC
     // funçao fetch_assoc()
     while($row = $result->fetch_assoc()){  
         var_dump($row);
     }
     */

     //para retorna os dados no formato json
    $data = array();    
    while($row = $result->fetch_assoc()){
        array_push($data, $row);        
    }
    echo json_encode($data); 


?>