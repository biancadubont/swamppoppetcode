	<?php
	///define contants////
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASSWORD","");
	define("DB_NAME", "swamppoppet_code");

	class Connection{
	private $mysqli;

	public function __construct(){
		$this->mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
	}
	///CLOSE CONNECTION//
	public function close(){
		$this->msqli->close();
	}
	///execute the passed in query and reture result/////
	public function query($sql){

		///execute the query
		//echo $sql;
		$result = $this->mysqli->query($sql);
		return $result;

	}
	// fetch a row from result_set as an associative array
	public function fetch($resultSet) {
		return $resultSet->fetch_assoc();
	}
    public function getInsertId() {
        return $this->mysqli->insert_id;
    }
////////input filtering for security purposes//////
    public function escape($value){
    	return $this->mysqli->real_escape_string($value);
    }
}

