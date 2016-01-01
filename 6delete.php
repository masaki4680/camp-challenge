<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>
<?php
//商品削除機能

session_start();

if(!isset($_SESSION["confirm"])){

	header("Location: ./6login.php");
	exit;
}

require_once("6function.php");

$name = $_GET["name"];

$com = new com();
$com->deletename($name);

echo "削除を完了しました。<br><br>";

?>
<a href="./6signin.php">編集一覧</a>
    </body>
</html>