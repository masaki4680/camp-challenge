<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>


<?php
//課題2:前回の課題1で作成したテーブルに自由なメンバー情報を格納する処理を構築してください
require_once("07kadai1.php");

$pdo=connectDb();
//is_string,与えられた情報が文字列かどうか確認する
if(!(is_string($pdo))){
//    return $pdo;
}else{
    echo $pdo;
}

$sql = "INSERT INTO profiles(profilesID,name,tell,age,birthday)VALUES(:profilesID,:name,:tell,:age,:birthday)";
//実行とその結果を受け取れる変数を用意
$stmt=$pdo->prepare($sql);
//実数値はこのようにbindvalueなどを用いて中身を割り当てる
$stmt->bindValue(':profilesID',7);
$stmt->bindValue(':name','中村誠希');
$stmt->bindValue(':tell','080-1173-5939');
$stmt->bindValue(':age',24);
$stmt->bindValue(':birthday','1991-09-14');

//SQLを実行
$stmt->execute();

//$連想配列の入れ物=$ステートメントハンドラ->fetch(PDO::FETCH_ASSOC);で取り出せる
$sql2="select * from profiles where profilesID = :profilesID";
$stmt=$pdo->prepare($sql2);
$stmt->bindValue(':profilesID',7,PDO::PARAM_INT);
$stmt->execute();
while($data = $stmt->fetch()) {
    var_dump($data);
}
//$ans = $stmt->fetchAll();
//var_dump($ans);
/*foreach($stmt->fetchAll()as $ar){
    echo $ar;
}*/
?>


    </body>
</html>