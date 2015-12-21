<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>

<?php
//課題13:フォームなどを駆使して、CREATE TABLEやSELECTなど、これまで行ってきたDBへの操作がそのブラウザ上で全て完結できるようなサービスを構築してください。

require_once("07kadai1.php");

$pdo=connectDb();
//is_string
if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}

echo "データーを登録してください";

?>
        <form name="insert" action="07kadai13-2.php" method="POST">
            ID     <input type="text" name="profilesID" placeholder="例：9"><br>
            名前    <input type="text" name="name" placeholder="例：武藤遊戯"><br>
            電話番号<input type="text" name="tell" placeholder="例:080-0000-0000"><br>
            年齢    <input type="text" name="age" placeholder="例：52"><br>
            誕生日   <input type="text" name="birthday" placeholder="例:2015-12-15">
            <input type="submit" value="送信">
        </form>
        <br>
        <br>
        <br>
        <a href="./07kadai13-0.php" name="HOME">HOME</a>
        <br>
        <h5>データー編集はこちら↓</h5>
        <a href="./07kadai13-3.php" name="edit">データー編集</a><br>
        <a href="./07kadai13-6.php" name="delete">削除</a>

    </body>
</html>