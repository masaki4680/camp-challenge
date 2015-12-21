<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>

<?php
//課題3:前回の課題1で作成したテーブルからSELECT*により全件取得し、画面に取得した全情報を表示してください

//一個しか表示されない
require_once("07kadai1.php");

$pdo=connectDb();
//is_string,与えられた情報が文字列かどうか確認する
if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}

$sql = "select * from profiles";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$ar=$stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($ar as $key){
    
    foreach($key as $value){
        echo $value."<br>";
    }
    
}

        ?>


    </body>
</html>