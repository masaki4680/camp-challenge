<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>

        <?php
//課題10:profileIDで指定したレコードを削除できるフォームを作成してください

//一個しか表示されない
require_once("07kadai1.php");

$pdo=connectDb();
//is_string,与えられた情報が文字列かどうか確認する
if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}
if(empty($_POST["profilesID"])){
    echo"入力してください";
}
else{
    $sql = "delete from profiles where profilesID = :profilesID";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':profilesID',$_POST["profilesID"],PDO::PARAM_STR);
    $stmt->execute();
    echo "削除されました。"."<br>";}
        ?>
        <form name="delete" action="07kadai13-6.php" method="POST">
            ID     <input type="text" name="profilesID" placeholder="例：9"><br>
            <input type="submit" value="送信">
        </form>
        <br>
        <br>
        <a href="./07kadai13-1.php">戻る</a>
        <br>
        <br>
        <a href="./07kadai13-0.php">HOME</a>
    </body>
</html>
