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

$sql = "delete from profiles where profilesID = :profilesID";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':profilesID',7,pdo::PARAM_INT);
$stmt->execute();



?>