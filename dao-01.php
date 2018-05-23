<?php

Class Sql extends PDO {

	private $conn;


	public function  __construct(){

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root@mysql2018");
	}

	private function setParams($statment , $parameters = array()){

		foreach ($parameters as $key => $value) {

			$this->setParam($key, $value);
			

		}

	}

	public function testeGIT(){

		echo "Teste";


	}

	private function setParam($statment, $key , $value){

		$statment->bindParam($key,$value);




	}

	public function query($rawQuery , $params = array()){

		$stmt = $this->conn->prepare($RawQuery);

		$this->setParam($stmt, $params);

		return $stmt;

	}


	public function select($rowQuery, $params = array()){

		$stmt = $this->query($rawQuery, $params);

		$stmt->fetchAll();

	}




}











?>