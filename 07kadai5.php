<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>
<?php
//課題5：nameに「茂」を含む情報を取得し、画面に取得した情報を表示してください
require_once("07kadai1.php");

$pdo=connectDb();

if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}

$sql = "select * from profiles where name like :name";
$stmt = $pdo->prepare($sql);
$name = "%茂%";
$stmt->bindValue(':name',$name,PDO::PARAM_STR);
$stmt->execute();
$data=$stmt->fetch(PDO::FETCH_ASSOC);
foreach($data as $value){
    echo $value."<BR>";
}

        ?>
    </body>
</html>
