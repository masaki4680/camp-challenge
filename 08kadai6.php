<?php
// �U�Dshow�֐��Ŋe�e�[�u���̏��̈ꗗ���\�������悤�ɂ��Ă��������B

require_once("08kadai3.php");

$pdo = connectDb();



Class human extends base{
	private $table;
	private $result;
    //��������





	function __constract(){
		$this->table = "human";
	}

// 	�p���{�㏈��
	 function load(){
		$human = $this->table;
		$sql = "select * from ". $human;
		global $pdo;
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$this->result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	//�㏈��
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
	//�p���{�㏈��
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


