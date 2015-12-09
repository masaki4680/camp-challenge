<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
</html>
<?php
//課題2

function check_number($number)
{
	if($number % 2 == 0){
		echo"偶数です。"."<br>";
	}
	else{
		echo"奇数です。"."<br>";
	}
}
check_number(5);
?>
