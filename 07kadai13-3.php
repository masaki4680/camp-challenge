<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>

        <?php
require_once("07kadai1.php");

$pdo=connectDb();
//is_string,�^����ꂽ��񂪕����񂩂ǂ����m�F����
if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}
if(empty($_POST["profilesID"])){
    echo"�ҏW������profilesID����͂��Ă�������";
}
else{
    $sql = "select * from profiles where profilesID = :profilesID";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':profilesID',$_POST["profilesID"],PDO::PARAM_STR);
    $stmt->execute();}
        ?>
        <form name="update" action="07kadai13-4.php" method="POST">
            ID     <input type="text" name="profilesID" placeholder="��F9"><br>
            <input type="submit" value="���M">
        </form>
        <br>
        <br>
        <a href="./07kadai13-1.php">�߂�</a>
    </body>
</html>