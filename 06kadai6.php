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
    //    return $pdo;
    echo $pdo;
    exit;
}





Class user{
    private $id;
    private $password;

    //userid登録 password登録
        public function setmen($input_id,$input_password){
        $this->id = $input_id;
        $this->password = $input_password;
        $sql = "INSERT INTO com_user(id,password) values(:id,:password)";
        global $pdo;
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id',$this->id);
        $stmt->bindValue(':password',$this->password);
        $stmt->execute();
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

}