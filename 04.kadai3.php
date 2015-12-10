<!DOCTYPE html>
<html lang="ja">
    <meta charset="utf-8">
</html>

<?PHP
//３．2016年11月4日 10時0分0秒のタイムスタンプを作成し、
//「年-月-日 時:分:秒」で表示してください。
$timestamp=mktime(10,0,0,11,4,2016);
$day = date('Y-m-d H:i:s',$timestamp);
echo $day;
?>
