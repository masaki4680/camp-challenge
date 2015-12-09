<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
</html>

<?php
//課題5
//戻り値としてある人物のid(数値),名前,生年月日、住所を返却し、受け取った後はid以外の値を表示する
//あってるのかわからない

function my_data(){
	$name ="中村誠希";
	$born = "1991年9月14日";
	$adress = "千葉県松戸市";
	$id = "7";
	$member = array($name,$born,$adress);
	return $member;
}
$data = my_data();

echo "名前は".$data[0]."<br>";
echo "生年月日は".$data[1]."<br>";
echo "住所は".$data[2]."<br>";
?>