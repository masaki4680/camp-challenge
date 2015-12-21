<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
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

if(empty($_POST["profilesID"]) || empty($_POST["name"]) || empty($_POST["tell"]) || empty($_POST["age"]) || empty($_POST["birthday"])){
    echo "データーを再登録してください";
}else{
    $sql = "INSERT INTO profiles(profilesID,name,tell,age,birthday)
    VALUES(:profilesID,:name,:tell,:age,:birthday)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':profilesID',$_POST["profilesID"],PDO::PARAM_INT);
    $stmt->bindValue(':name',$_POST["name"],PDO::PARAM_STR);
    $stmt->bindValue(':tell',$_POST["tell"]);
    $stmt->bindValue(':age',$_POST["age"],PDO::PARAM_INT);
    $stmt->bindValue(':birthday',$_POST["birthday"]);
    $stmt->execute();
    echo "データーを追加しました。<br>";
    echo "引き続きデーターを入力する場合は入力してください";
}
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