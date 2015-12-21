<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>

        <?php
require_once("07kadai1.php");

$pdo=connectDb();
//is_string,与えられた情報が文字列かどうか確認する
if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}
if(empty($_POST["profilesID"])){
    echo"編集したいprofilesIDを入力してください";
}
else{
    $sql = "select * from profiles where profilesID = :profilesID";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':profilesID',$_POST["profilesID"],PDO::PARAM_STR);
    $stmt->execute();}
        ?>
        <form name="update" action="07kadai13-4.php" method="POST">
            ID     <input type="text" name="profilesID" placeholder="例：9"><br>
            <input type="submit" value="送信">
        </form>
        <br>
        <br>
        <a href="./07kadai13-1.php">戻る</a>
    </body>
</html>