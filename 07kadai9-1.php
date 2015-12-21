<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>
        <?php
//課題9:フォームからデータを挿入できる処理を構築してください。
require_once("07kadai1.php");

$pdo=connectDb();
//is_string
if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}

if(empty($_POST["profilesID"]) || empty($_POST["name"]) || empty($_POST["tell"]) || empty($_POST["age"]) || empty($_POST["birthday"])){
    echo "入力してください";
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
   echo "データーを追加しました。";
}
        ?>
        <form name="insert" action="07kadai9-1.php" method="POST">
            ID     <input type="text" name="profilesID" placeholder="例：9"><br>
            名前    <input type="text" name="name" placeholder="例：武藤遊戯"><br>
            電話番号<input type="text" name="tell" placeholder="例:080-0000-0000"><br>
            年齢    <input type="text" name="age" placeholder="例：52"><br>
            誕生日   <input type="text" name="birthday" placeholder="例:2015-12-15">
            <input type="submit" value="送信">
        </form>

    </body>
</html>






























