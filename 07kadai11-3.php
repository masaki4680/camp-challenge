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
    $sql = "UPDATE profiles 
    SET
    name = :name,
    tell = :tell,
    age = :age,
    birthday = :birthday
    where profilesID = :profilesID";
    $stmt = $pdo->prepare($sql);
$stmt->bindValue(':profilesID',$_POST["profilesID"],PDO::PARAM_INT);
    $stmt->bindValue(':name',$_POST["name"],PDO::PARAM_STR);
    $stmt->bindValue(':tell',$_POST["tell"]);
    $stmt->bindValue(':age',$_POST["age"],PDO::PARAM_INT);
    $stmt->bindValue(':birthday',$_POST["birthday"]);
    $stmt->execute();
    echo "データーを更新しました。";

        ?>

    </body>
</html>