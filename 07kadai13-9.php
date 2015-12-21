<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>

        <?php

require_once("07kadai1.php");

$pdo=connectDb();
//is_string
if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}
$a = $_POST["size1"];
if($a == 1){
    $type = "varchar(255)";
}
if($a == 2){
    $type = "int(11)";
}

$b = $_POST["size2"];
if($b == 1){
    $box = "varchar(255)";
}
if($b == 2){
    $box = "int(11)";
}
$karamu1 = $_POST["karamu1"];
$karamu2 = $_POST["karamu2"];
$table = $_POST["table"];

$sql = "create table $table(
       $karamu1 $type,
       $karamu2 $box
)";
//var_dump($table);
//var_dump($sql);

//bindvalueは置き換える時intすらも型指定してしまう。
$stmt = $pdo->prepare($sql);
//$stmt->bindValue(':table',$table);
//$stmt->bindValue(':karamu1',$karamu1);
//$stmt->bindValue(':karamu2',$karamu2);
//$stmt->bindValue(':type',$type);
//$stmt->bindValue(':box',$box);
$stmt->execute();
echo "登録完了しました。"
        ?>

    </body>
</html>