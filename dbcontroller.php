<?php
class DBController {
	//Parameters with default values to connect to the database
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "myDB";
	private $conn;
	

	//Generate Connection by Contructor;
	//If your sql server have different host and username, password, you must give data to constructor
	function __construct($host,$user,$password,$database) {
		$this->conn = $this->connectDB();
	}
	

	//Connection Function
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	

	//Set of code -> runQuery -> return Data Rows
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	

	//Extend: Count the number of data rows on this query
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}


//Copyright Simple PHP Shopping Cart phppot.com 
?>
