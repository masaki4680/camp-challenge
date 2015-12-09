<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
</html>
<?php
//課題1,4
if(my_profile(true)){
	echo"この処理は正しく実行できました。";
}else{
	echo"正しく実行できませんでした。";
}

function my_profile(){
	echo"中村誠希</br>";
	echo"1991年9月14日</br>";
	echo"ヤッホー！！</br>";
	return true;
}

//一回目の表示
my_profile();


//2回目の表示
my_profile();
//課題2 
//引数を指定
check_number(5);


function check_number($number)
{
	if($number % 2 == 0){
		echo"偶数です。";
	}
	else{
		echo"奇数です。";
	}
}

?>