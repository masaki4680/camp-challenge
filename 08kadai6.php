<?php
// ‚UDshowŠÖ”‚ÅŠeƒe[ƒuƒ‹‚Ìî•ñ‚Ìˆê——‚ª•\Ž¦‚³‚ê‚é‚æ‚¤‚É‚µ‚Ä‚­‚¾‚³‚¢B

require_once("08kadai3.php");

$pdo = connectDb();



Class human extends base{
	private $table;
	private $result;
    //‰Šúˆ—





	function __constract(){
		$this->table = "human";
	}

// 	Œp³{Œãˆ—
	 function load(){
		$human = $this->table;
		$sql = "select * from ". $human;
		global $pdo;
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$this->result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	//Œãˆ—
	function show(){
		foreach($this->result as $key){
             foreach($key as $value){
             	 echo $value ."<br>";
             }
		}
	}
}


Class station extends base{
	private $table;
	private $result;

	function __constract(){
		$this->table= "station";
	}
	//Œp³{Œãˆ—
	function load(){
		$station = $this->table;
		$sql = "select * from ".$station;
		global $pdo;
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$this->result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	function show(){

		foreach($this->result as $key){
			foreach($key as $value){
				echo $value ."<br>";
			}
		}
	}
}



$human =new human();
$human->__constract();
$human->load();
$human->show();

echo "<br>";

$station = new station();
$station->__constract();
$station->load();
$station->show();


