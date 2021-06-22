<?PHP
function verificaUsuario(){

if (!$usuario){

   throw new Exception("Nenhum usuário foi informado", 150);    
 } 
 echo $usuario;
}

try{
    verificaUsuario("Nsilva@mail.br");
    verificaUsuario("");

}catch(Exception $e){
    echo $e->getMessage() . "</br>";
    
}finally{
    echo "Executou o try";    

}

?>