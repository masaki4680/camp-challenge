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
<li><a href="./6index.php">���i�o�^</a></li>
<li><a href="./6signin.php">���X�g</a></li>
<li><a href="./6logout.php">���O�A�E�g</a></li>
</ul>
</div>
���O�C���ɐ������܂���<br>
���i��o�^���Ă��������B<br>
<form name="com" action="6signin.php" method="post">
    ���i��:<input type="text" name="name"
placeholder="��F�^�����`����">
<input type="submit" value="���M"></form>
</body>
</html>
