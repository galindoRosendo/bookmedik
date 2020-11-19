<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="id15391316_megabridgebookmedikuser";$this->pass="axfx&96(AMZ=_Izp";$this->host="localhost";$this->ddbb="id15391316_megabridgebookmedik";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
