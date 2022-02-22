<?php 
	class Database{
		public $con;
		protected $dbhost="localhost";
		protected $dbuser="root";
		protected $dbpass="";
		protected $dbname="closingtime";

		function __construct(){
			$this->connect_db();
		}
		
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		} 
		
}
?>
