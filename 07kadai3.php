<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>

<?php
//課題3:前回の課題1で作成したテーブルからSELECT*により全件取得し、画面に取得した全情報を表示してください


require_once("07kadai1.php");

$pdo=connectDb();
//is_string,与えられた情報が文字列かどうか確認する
if(!(is_string($pdo))){
    return $pdo;
}else{
    echo $pdo;
}

$sql = "select * from profiles";

$stmt = $pdo->prepare($sql);

$stmt->bindValue();

$stmt->execute();

$ar=$stmt->fetch(PDO::FETCH_ASSOC);

foreach($ar as $value){
    
    echo $value;
    
}

        ?>


    </body>
</html>