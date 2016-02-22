<?php
//課題6:課題2でINSERTしたレコードを指定して削除してください。SELECT*で結果を表示してください

//
require_once("07kadai1.php");

$pdo=connectDb();
//is_string,与えられた情報が文字列かどうか確認する
if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}

//課題2のデーターを削除
$sql = "delete from profiles where profilesID = :profilesID";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':profilesID',5,pdo::PARAM_INT);
$stmt->execute();

//データーが消えているか確認
$sql2 = "select * from profiles";
$stmt2 = $pdo->prepare($sql2);
$stmt2->execute();
$datas = $stmt2->fetchAll(PDO::FETCH_ASSOC);
foreach($datas as $data){
    foreach($data as $each){
        echo $each."<br>";
    }
}



?>