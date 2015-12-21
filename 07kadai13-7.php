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


        ?>
        <h3>
            テーブルを作成してください  
        </h3>

        <br>
        <form name="create" action="07kadai13-9.php" method="POST">
            テーブル名    <input type="text" name="table" placeholder="入力してください"><br><br>
            カラム1    <input type="text" name="karamu1" placeholder="入力してください">型:<select name="size1">
            <option value="1">varchar(255)</option>
            <option value="2" selected>int(11)</option>
            </select><br>
            カラム2    <input type="text" name="karamu2" placeholder="入力してください">型:<select name="size2">
            <option value="1">varchar(255)</option>
            <option value="2" selected>int(11)</option>
            </select><br>
            <input type="submit" value="送信">
            <br>
            <a href="./07kadai13-0.php">HOME</a>

        </form>
    </body>
</html>