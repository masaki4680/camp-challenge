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

require_once("6config.php");


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
   	       var_dump($before);
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
