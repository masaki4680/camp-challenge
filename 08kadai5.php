<?php
//�T�Dload�֐���DB����S�����擾����悤�Ɋe�N���X�̊֐����������Ă��������B
// �@�@���̍ہAtable�ϐ��𗘗p���āA�f�[�^���擾����悤�ɂ��Ă��������B


require_once("08kadai3.php");

$pdo = connectDb();

Class human extends base{
	private $table;

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
}

// abstract class base{

// 	protected function load(){

// 		function america(){
// 			$sql = "select * from america";
// 			global $pdo;
// 			$stmt = $pdo->prepare($sql);
// 			$stmt->execute();
// 		}
// 		function asa(){
// 			$sql = "select * from asa";
// 			global $pdo;
// 			$stmt = $pdo->prepare($sql);
// 			$stmt->execute();
// 		}
// 		function com(){
// 			$sql = "select * from com";
// 			global $pdo;
// 			$stmt = $pdo->prepare($sql);
// 			$stmt->execute();
// 		}
// 		function com_user(){
// 			$sql = "select * from com_user";
// 			global $pdo;
// 			$stmt = $pdo->prepare($sql);
// 			$stmt->execute();
// 		}
// 		function department(){
// 			$sql = "select * from department";
// 			global $pdo;
// 			$stmt = $pdo->prepare($sql);
// 			$stmt->execute();
// 		}
// 		function gozira(){
// 			$sql = "select * from gozira";
// 			global $pdo;
// 			$stmt = $pdo->prepare($sql);
// 			$stmt->execute();
// 		}

// 		}
// 		function profiles(){
// 			$sql = "select * from profiles";
// 			global $pdo;
// 			$stmt = $pdo->prepare($sql);
// 			$stmt->execute();
// 		}
// 		function station(){
// 			$sql = "select * from station";
// 			global $pdo;
// 			$stmt = $pdo->prepare($sql);
// 			$stmt->execute();
// 		}
// 		function user(){
// 			$sql = "select * from user";
// 			global $pdo;
// 			$stmt = $pdo->prepare($sql);
// 			$stmt->execute();
// 		}
// 		function �R�R�W��(){
// 			$sql = "select * from �R�R�W��";
// 			global $pdo;
// 			$stmt = $pdo->prepare($sql);
// 			$stmt->execute();
// 		}

// 	}

// 	function show(){

// 	}
// }

?>