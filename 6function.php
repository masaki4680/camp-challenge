<?php
//６．以下の機能を満たすロジックを作成してください。
//
//在庫管理システムを作成します。
//まず、DBにユーザー情報管理テーブルと、商品情報登録テーブルを作成してください。
//その上で、下記機能を実現してください。
//
//①ユーザーのログイン・ログアウト機能
//
//②商品情報登録機能
//
//③商品一覧機能
//
//※各テーブルの構成は各自の想像で作ってみてください。

// E_NOTICEエラー以外出力する
error_reporting(E_ALL & ~E_NOTICE);

function connectDb(){
	$param = "mysql:dbname=challenge_db;host=localhost";
	try{
		//ここで行われた処置でエラーが発生したら

		//この時の$pdoはローカル変数と定義
		$pdo = new PDO($param,"root","46803980a");
		return $pdo;
	}catch(PDOException $e){
		//ここに書いてある処理を行う。
		return $e->getMessage();
	}

}

$pdo =connectDb();

if(is_string($pdo)){

	echo $pdo;
	exit;
}


Class user{


    //userid登録 password登録
        public function setman($input_id,$input_password){

        $sql = "INSERT INTO com_user(id,password)
        		VALUES(:id,:password)";
        global $pdo;
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id',$input_id);
        $stmt->bindValue(':password',$input_password);
        $stmt->execute();


    }

    //user確認
       public function getuser($input_id,$input_password){

       	$sql = "select * from com_user where id =:id and password =:password";
       	global $pdo;
       	$stmt = $pdo->prepare($sql);
       	$stmt->bindValue(':id',$input_id);
       	$stmt->bindValue(':password',$input_password);
       	$stmt->execute();
        $profile = $stmt->fetch(PDO::FETCH_ASSOC);

       	return $profile ? $profile : false;
       }
}

Class com{
        private $name;
    //名前を登録
        public function setname($input_name){
        $this->name = $input_name;
        $sql = "INSERT INTO com(name) values(:name)";
        global $pdo;
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name',$this->name);
        $stmt->execute();
    }
    //商品名削除
   public function deletename($input_name){
       $this->name = $input_name;
        $sql = "delete from com where name = :name";
        global $pdo;
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name',$this->name);
        $stmt->execute();
    }
    //商品表示
    public function displayname(){
          //*は全カラムを抽出
//           $this->name = $input_name;
          $sql = "select name from com";
          global $pdo;
          $stmt = $pdo->prepare($sql);
          $stmt->execute();
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
   //商品編集
   public function editname($before_name,$after_name){
   	       $before = $before_name;
   	       $after = $after_name;
           $sql = "update com
           		   set
                   name = :name
           		   where
           		   name = :object";
           global $pdo;
           $stmt = $pdo->prepare($sql);
           $stmt->bindValue(':name',$after);
           $stmt->bindValue(':object',$before);
           $stmt->execute();
   }
//is null でnullをpdoできる
}
