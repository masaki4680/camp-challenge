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

echo "�폜���������܂����B<br><br>";

?>
<a href="./6signin.php">�ҏW�ꗗ</a>
    </body>
</html>