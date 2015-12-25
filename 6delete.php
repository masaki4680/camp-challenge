<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>
<?php
require_once("6function.php");

$name = $_GET["name"];

$com = new com();
$com->deletename($name);

echo "削除を完了しました。<br><br>";

?>
<a href="./6signin.php">編集一覧</a>
    </body>
</html>