<?php 

class Usuario {
	
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function __construct($login = "", $password = ""){
		$this->setDeslogin  ($login);
		$this->setDessenha  ($password);		
	}

	public function getIdusuario(){ return $this-> idusuario; }
	public function setIdusuario($value){ $this->idusuario  = $value; }

	public function getDeslogin() { return $this-> deslogin; }
	public function setDeslogin($value) { $this->deslogin  = $value; }
	
	public function getDessenha(){	return $this-> dessenha; }
	public function setDessenha($value){ $this->dessenha  = $value; }
	
	public function getDtcadastro() { return $this-> dtcadastro;	}
	public function setDtcadastro($value) { $this->dtcadastro  = $value; }

	public function setDatas($data){
		$this->setIdusuario ($data['idusuario']);
		$this->setDeslogin  ($data['deslogin']);
		$this->setDessenha  ($data['dessenha']);
		$this->setDtcadastro($data['dtcadastro']);
		// $this->setDtcadastro(new DateTime($data['dtcadastro'])); Altera o format da data retornada do DB.;
	}


	public function loadById($id){
		//Cria a instancia/objeto SQl responsvel por realizar as operaçoes no DB
		// operaçoes: consulta, criaçao, atualizaço, e exclusao.
		$sql = new Sql();

		// Aqui o Sql "SELECT * FROM tb_usuarios WHERE idusuario = :ID" e o paramentro $rawQuery
		// e o "array(":ID"=$id)" e o $params = array() do metodo 'public function select' da class Sql-responsalvel por acessar o DB. 
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=>$id));
		//verifica se existe pelo menos 1 registro no retorno. 
	
		if(isset($results[0])){
		// if (count($results)> 0)  //outra forma de verificar se tem ao menos um resultado
		$this->setDatas($results[0]);

		}
	}

	public static function getList(){
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
	}

	//// Busca uma lista de usuarios pesquisada pelo login, onde o LIKE(sememlhante)  define os paramentros  de busca por semelhança.
	public static function search($login){
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
			':SEARCH' => "%".$login."%"));
	}

	//// Busca na tabela "Usuarios" o usuario logado/autenticado correspondente ao login definido como parametros
		public function login($login, $password){		
			$sql = new Sql();
			//var_dump($sql);
			$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN  AND dessenha = :PASSWORD", array(
				":LOGIN"=>$login,
				":PASSWORD"=>$password));
				
					// if (count($results)> 0)  //outra forma de verificar se tem ao menos um resultado
			if(count($results) > 0){
				$this->setDatas($results[0]);
				}  else{
						throw new Exception("Login e/ou senha invalidos");
					}
		}

		public function insert(){
			$sql = new Sql();
			$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
				':LOGIN'=>$this->getDeslogin(),
				':PASSWORD'=>$this->getDessenha()));
			if(count($results) > 0){
				$this->setDatas($results[0]);
		}
	}

	public function update($login, $password){
		
		$this->setDeslogin($login);
		$this->setDessenha($password);
		$sql = new Sql();
		$sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
			':LOGIN'=>$this->getDeslogin(),
			':PASSWORD'=>$this->getDessenha(),
			':ID'=>$this->getIdusuario()
		) );

	}

		public function __toString(){
			return json_encode(array("idusuario"   =>$this->getIdusuario(),
									 "deslogin"   =>$this->getDeslogin(),
									 "dessenha"   =>$this->getDessenha(),
									 "dtcadastro" =>$this->getDtcadastro()
		));
	}

}

?>