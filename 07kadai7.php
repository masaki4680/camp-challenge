<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>


<?php
//�ۑ�7:profileID=1��name���u���� �C���v�ɁAage��48�ɁAbirthday��1967-11-06�ɍX�V���Ă�������

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
$stmt->bindValue(':name','�����C�O',PDO::PARAM_STR);
$stmt->bindValue(':age',48,PDO::PARAM_INT);
$stmt->bindValue(':birthday','1967-11-06');
$stmt->bindValue(':profilesID',1,PDO::PARAM_INT);
$stmt->execute();




?>
    </body>
</html>