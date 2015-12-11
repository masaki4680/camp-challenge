<!DOCTYPE html>
<html lang="ja">
    <meta charset="utf-8">
</html>


<?php
//５．自分の氏名について、バイト数と文字数を取得して、表示してください。
$name = '中村誠希';
$mozi=mb_strlen($name,'UTF-8');
echo $mozi."文字"."<br>";

$byte=strlen($name);
echo $byte."バイト";
?>


