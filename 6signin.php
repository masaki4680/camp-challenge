<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>
        <?php
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
require_once("6function.php");
$com = new com();
$com->setname($_POST["name"]);
echo "登録完了しました";
$result = $com->displayname($_POST["name"]);

 }else{


        ?>
        <h5>登録した商品名</h5>
        <ul class="list-group">
            <?php foreach($result as $item){ ?>
            <li class="list-item-group">
                <?php  echo $item["name"]; ?>
                <a href="./6edit.php?name=<?php echo $item["name"]; ?>">[編集]</a>
                <a href="./6delete.php?name=<?php echo $item["name"]; ?>">[削除]</a>
            </li>
            <?php }} ?>
        </ul>
    </body>
</html>