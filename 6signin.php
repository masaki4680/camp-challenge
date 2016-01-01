<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>
    <div class="container">
<ul>
<li><a href="./6index.php">商品登録</a></li>
<li><a href="./6signin.php">リスト</a></li>
<li><a href="./6logout.php">ログアウト</a></li>
</ul>
</div>
        <?php
        require_once("6function.php");

        session_start();

        if(!isset($_SESSION["confirm"])){

        	header("Location: ./6login.php");
        	exit;
        }


        $com = new com();
        $result = $com->displayname();


 if($_SERVER['REQUEST_METHOD'] == 'POST'){

$com->setname($_POST["name"]);
echo "登録完了しました";

 }

?>


<h5>登録した商品名</h5>
        <ul class="list-group">
        <?php foreach($result as $item){ ?>
            <li class="list-item-group">
                <?php  echo $item["name"]; ?>
                <a href="./6edit.php?name=<?php echo $item["name"]; ?>">[編集]</a>
                <a href="./6delete.php?name=<?php echo $item["name"]; ?>">[削除]</a>
            </li>
            <?php }?>
        </ul>
    </body>
</html>