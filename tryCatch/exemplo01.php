<?PHP

 try{

throw new Exception("Ocorreu um erro.", 400);


 } catch  (Exception $e){
     
    echo json_encode(array(
        "messege"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ));
 }      


?>