<?php
// �U�Dshow�֐��Ŋe�e�[�u���̏��̈ꗗ���\�������悤�ɂ��Ă��������B

require_once("08kadai3.php");

$pdo = connectDb();

Class human extends base{
	private $table;
    //��������
	function constract(){
		$this->table = "human";
	}
	//�p���{�㏈��
	function load(){
		$human = $this->table;
		$sql = "select * from". $human;
		global $pdo;
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
	}
	//�㏈��
	function show(){
		$human = $this->table;
		$sql = "select * from". $human;
		global $pdo;
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as $key){
             foreach($key as $value){
             	 echo $value;
             }
		}
	}
}


Class station extends base{
	private $table;

	function constract(){
		$this->table= "station";
	}
	//�p���{�㏈��
	function load(){
		$station = $this->table;
		$sql = "select * from".$station;
		global $pdo;
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
	}

	function show(){
		$human = $this->table;
		$sql = "select * from". $human;
		global $pdo;
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as $key){
			foreach($key as $value){
				echo $value;
			}
		}
	}
}



$answer = human();
$answer->constract();
$answer->show();

