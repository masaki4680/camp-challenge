<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>


<?php
//課題7:profileID=1のnameを「松岡 修造」に、ageを48に、birthdayを1967-11-06に更新してください

require_once("07kadai1.php");

$pdo=connectDb();

if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}

$sql = "UPDATE profiles
         SET
         name = :name,
         age = :age,
         birthday = :birthday
         where profilesID = :profilesID";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name','松岡修三',PDO::PARAM_STR);
$stmt->bindValue(':age',48,PDO::PARAM_INT);
$stmt->bindValue(':birthday','1967-11-06');
$stmt->bindValue(':profilesID',1,PDO::PARAM_INT);
$stmt->execute();




?>
    </body>
</html>