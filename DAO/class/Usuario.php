<?php 

class Usuario {
	
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function getIdusuario(){ return $this-> idusuario; }
	public function setIdusuario($value){ $this->idusuario  = $value; }

	public function getDeslogin() { return $this-> deslogin; }
	public function setDeslogin($value) { $this->deslogin  = $value; }
	
	public function getDessenha(){	return $this-> dessenha; }
	public function setDessenha($value){ $this->dessenha  = $value; }
	
	public function getDtcadastro() { return $this-> dtcadastro;	}
	public function setDtcadastro($value) { $this->dtcadastro  = $value; }


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
		$row = $results[0];
		$this->setIdusuario ($row['idusuario']);
		$this->setDeslogin  ($row['deslogin']);
		$this->setDessenha  ($row['dessenha']);
		$this->setDtcadastro($row['dtcadastro']);
		// $this->setDtcadastro(new DateTime($row['dtcadastro'])); Altera o format da data retornada do DB.;
		}
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