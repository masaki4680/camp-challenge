<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>
        <?php
//課題8:検索用のフォームを用意し、名前の部分一致で検索＆表示する処理を構築してください。同じページにリダイレクトするPOST処理と、POSTに値が入っているかの条件分岐を活用すれば、一つの.phpで完了できますので、チャレンジしてみてください
require_once("07kadai1.php");
//PDOに接続する
$pdo=connectDb();
//is_string,与えられた情報が文字列かどうか確認する
if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}

if(empty($_POST["search"])){
    echo "入力してください。";
}else{
    $search_key = '%'.$_POST["search"].'%';
    $sql = "select * from profiles where name like :name";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':name',$search_key,PDO::PARAM_STR);
    $stmt->execute();
    $content = $stmt->fetch(PDO::FETCH_ASSOC);
    
    foreach($content as $answer){
        echo $answer."<br>";
    }
}
?>
        <form name="search" action="07kadai8.php" method="POST">
            検索:<input type="text" name="search" >
            <input type="submit" value="検索">
        </form>

    </body>
</html>



    









