<?php
// ４．３で作成した抽象クラスを継承して、以下のクラスを作成してください。
// 　　・人の情報を扱うHumanクラス
// 　　　　・駅の情報を扱うStationクラス
// 　　　　　　また、各クラスに隠匿変数でtableという変数を用意し、各クラスの初期化処理で
// 　　　　　　　　table変数にテーブル名を設定してください。
require_once("08kadai0.php");
require_once("08kadai3.php");

$pdo = connectDb();

Class human extends base{
    private $table;

     function constract(){
      $this->table = "human";
    }
}


Class station extends base{
    private $table;

     function constract(){
        $this->table= "station";
    }
}