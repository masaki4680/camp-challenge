<!DOCTYPE html>
<html lang="ja">
    <meta charset="utf-8">
</html>

<?PHP
//４．2015年1月1日 0時0分0秒と2015年12月31日 23時59分59秒の差（総秒）
//    を表示してください。
$timestamp=mktime(0,0,0,1,1,2015);
$time=mktime(23,59,59,12,31,2015);

$substrct=$timestamp-$time;
echo $substrct;

?>