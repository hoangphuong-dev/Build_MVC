<?php 
class DB {
	public $conect;
	protected $servername = "localhost";
	protected $username = "root";
	protected $password = "";
	protected $dbname = "mvc";

	public function __construct() {
		$this->conect = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
		mysqli_select_db($this->conect, $this->dbname);
		mysqli_query($this->conect, "SET NAMES 'utf-8'");
	}
}