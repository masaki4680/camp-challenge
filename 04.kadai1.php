<!DOCTYPE html>
<html lang="ja">
    <meta charset="utf-8">
</html>

<?php
$stamp = mktime(10,0,0,11,4,2016);
    $today = date('Y年m月d日 H時i分S秒',$stamp);

echo $today;
?>
