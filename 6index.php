<?php
session_start();

if(!isset($_SESSION["confirm"])){

	header("Location: ./6login.php");
exit;
}
?>
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
ログインに成功しました<br>
商品を登録してください。<br>
<form name="com" action="6signin.php" method="post">
    商品名:<input type="text" name="name"
placeholder="例：タランチュラ">
<input type="submit" value="送信"></form>
</body>
</html>
