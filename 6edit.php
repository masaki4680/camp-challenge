<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>
 <?php

 if($_SERVER['REQUEST_METHOD'] != 'POST'){
     echo "�ҏW���Ă��������B";

 ?>
 <form name="com" action="6edit.php" method="post">
    ���i��:<input type="text" name="after" value="<?php echo $_GET["name"] ;?>"><br>
           <input type="hidden" name="before" value="<?php echo $_GET['name'] ;?>">
    <input type="submit" value="���M">
</form>
 <?php
 }else{

require_once("6function.php");

$com = new com();
$com->editname($_POST["before"],$_POST["after"]);

echo "�ҏW���܂����B";
 }
?>

<a href="./6signin.php">�߂�</a>
    </body>
</html>