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

echo $_POST["profilesID"]."のデーターを入力してください";


        ?>
        <form name="update" action="07kadai11-3.php" method="POST">
            <input type="hidden" name="profilesID" value="<?php echo $_POST["profilesID"]; ?>">
            名前<input type="text" name="name" placeholder="例：武藤遊戯"><br>
            電話番号<input type="text" name="tell" placeholder="例:080-0000-0000"><br>
            年齢    <input type="text" name="age" placeholder="例：52"><br>
            誕生日   <input type="text" name="birthday" placeholder="例:2015-12-15">
            <input type="submit" value="送信">
        </form>
    </body>
</html>