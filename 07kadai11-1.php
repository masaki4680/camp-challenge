<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>

        <?php
//課題11:profileIDで指定したレコードの、profileID以外の要素をすべて上書きできるフォームを作成してください

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
    echo"profilesIDを入力してください";
}
else{
    $sql = "select * from profiles where profilesID = :profilesID";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':profilesID',$_POST["profilesID"],PDO::PARAM_STR);
    $stmt->execute();}
        ?>
        <form name="update" action="07kadai11-2.php" method="POST">
            ID     <input type="text" name="profilesID" placeholder="例：9"><br>
            <input type="submit" value="送信">
        </form>
    </body>
</html>
