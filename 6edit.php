<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>
 <?php

 session_start();

 if(!isset($_SESSION["confirm"])){

 	header("Location: ./6login.php");
 	exit;
 }

 if($_SERVER['REQUEST_METHOD'] != 'POST'){
     echo "編集してください。";

 ?>
 <form name="com" action="6edit.php" method="post">
    商品名:<input type="text" name="after" value="<?php echo $_GET["name"] ;?>"><br>
           <input type="hidden" name="before" value="<?php echo $_GET['name'] ;?>">
    <input type="submit" value="送信">
</form>
 <?php
 }else{

require_once("6function.php");

$com = new com();
$com->editname($_POST["before"],$_POST["after"]);

echo "編集しました。<br>";
 }
?>
<br>
<a href="./6signin.php">戻る</a>
    </body>
</html>