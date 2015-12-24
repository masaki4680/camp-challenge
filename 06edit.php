<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>
<?php
require_once("06kadai6.php");
$com = new com();
$com->setname($_POST["name"]);
echo "登録完了しました";

//*は全カラムを抽出
$sql = "select name from com";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
<h5>登録した商品名</h5>
   <ui class="list-group">
       <?php foreach($result as $item){ ?>
       <li class="list-item-group">
          <?php  echo $item["name"]; ?>
           <a href="./edit.php">[編集]</a>
           <a href="./delete.php">[削除]</a>
       </li>
      <?php } ?>
   </ui>
    </body>
</html>