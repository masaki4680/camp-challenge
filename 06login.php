<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>

        <?php
require_once("06kadai6.php");


if(empty($_POST['id']) || empty($_POST['password'])){
    echo "もう一度記入してください";
    ?>
        <form name="user" action="06login.php" method="post">
            ID:<input type="text" name="id" placeholder="例:3"><br>
            PASSWORD:<input type="text" name="password" placeholder="４桁で入力してください"><br>
            <input type="submit" value="送信">
        </form>
<?php

}else{
$user = new user;
$user->setmen($_POST['id'],$_POST['password']);
echo "登録が完了しました。<br>";
?>
商品を登録してください。<br>
<form name="com" action="06edit.php" method="post">
    商品名:<input type="text" name="name"
placeholder="例：タランチュラ">
<input type="submit" value="送信"></form>

<?php 
    }
?>
   

    </body>
</html>