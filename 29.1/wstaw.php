<?php 

class Database{

	private $host = 'localhost';
	private $user = 'root';
	private $password = 'root';
	private $database = 'imiona';

	private $conn;

	public function __construct(){

		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);

		$this->conn = $conn;
	}

	public function db_query($sql){

		$this->conn->query($sql);
	}

}


$imiona = array_map('trim', file('imiona.txt'));

foreach ($imiona as $imie) {
	
	$sql = sprintf("INSERT INTO imie(nazwa) VALUES ('$imie')");

	$conn = new Database();

	$conn->db_query($sql);
}






 ?>