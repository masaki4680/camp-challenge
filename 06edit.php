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
echo "�o�^�������܂���";

//*�͑S�J�����𒊏o
$sql = "select name from com";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
<h5>�o�^�������i��</h5>
   <ui class="list-group">
       <?php foreach($result as $item){ ?>
       <li class="list-item-group">
          <?php  echo $item["name"]; ?>
           <a href="./edit.php">[�ҏW]</a>
           <a href="./delete.php">[�폜]</a>
       </li>
      <?php } ?>
   </ui>
    </body>
</html>