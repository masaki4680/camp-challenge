<?php
//課題4:前回の課題1で作成したテーブルからprofileID=1の情報を取得し、画面に取得した情報を表示してください
require_once("07kadai1.php");

$pdo=connectDb();
//is_string,与えられた情報が文字列かどうか確認する
if(is_string($pdo)){
//    return $pdo;
echo $pdo;
exit;
}


$sql = "select * from profiles where profilesID = :profilesID";
$stmt = $pdo->prepare($sql);
//PDO::PARAM_INT:数値という型を指定しているらしい
$stmt->bindValue(':profilesID',1,PDO::PARAM_INT);
$stmt->execute();
//PDO::FETCH_ASSOCは連想配列の形式で取得
// PDO::FETCH_NUM 　レコードを一件ずつ配列の形式で取得
$data=$stmt->fetch(PDO::FETCH_ASSOC);
foreach($data as $key){
    echo $key."<br>";
}
?>