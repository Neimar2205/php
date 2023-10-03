<?php
class Sql extends PDO {
	private $conn;

	public function __construct(){
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "M.ns*3891");
	}

	// public function queryquery($rawQuery, $params = array()){
	// 	var_dump($rawQuery);
	// 	var_dump($params); exit;
	// 	$stmt = $this->conn->prepare($rawQuery);
	// 	$this->setParams($stmt, $params);
	// 	$stmt->execute();
	// 	return $stmt;
	// }


	// o parametro $rawQuery e onde os comandos SQL so recebidos
	//public function prepare(string $query, array $options = []): PDOStatement|false
	public function run($rawQuery, $params = array()){
		$stmt = $this->conn->prepare($rawQuery);
		$this->setParams($stmt, $params);
		$stmt->execute();
		return $stmt;
	}

	private function setParams($statement, $parameters = array()){
		foreach ($parameters as $key => $value) {
			$this->setParam($statement, $key, $value);
		}
	}

	private function setParam($statement, $key, $value){
		$statement->bindParam($key, $value);
	}

	// o parametro $rawQuery e onde os comandos SQL so recebidos
	public function select($rawQuery, $params = array()):array{
		$stmt = $this->run($rawQuery, $params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}

?>