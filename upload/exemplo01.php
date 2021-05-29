<form method="POST" ENCTYPE="multipart/form-data"><!-- /action define a rota ou pagina que sera chamada/ -->

    <input type="file" name="fileUpload"></input>
    <button type="submit">Enviar</button>

</form>



<?php

  //$_SERVER guarda o tipo do método da request. 
  //Aqui o if() Verificar se a chamada  do tipo POST
  if($_SERVER["REQUEST_METHOD"]==="POST"){
     
    //Aqui e guardado as informações do arquivo que sera recebido: name, tamanho, tipo, etc.
    //A variável $_FILES e a responsável por receber o arquivo enviado.
    $file = $_FILES["fileUpload"];

    // Verifica se ocorreu algum erro no upload do arquivo e gera um exception
    if($file["error"]){
      throw new Exception("Error: ".$file["error"]);
    }

    //Aqui e criado o diretório onde sera guardado os arquivos subidos. Se ele ja existir ele apenas sob o arquivo
    $dirUploads = "uploads";

    if(!is_dir($dirUploads)){
      // aqui se nao existe a pasta serra criada
      mkdir($dirUploads);
    }

    /// Aqui e onde o upload de fato e feito.
    //o move_uploaded_file realiza a mudança do arquivo do temp para o diretório "uploads" 
     if(move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR .$file["name"])){
            echo "Upload realizado com sucesso";
     }else{
       throw new Exception("Nao foi possível realizar o upload.");


     }


  }

?>