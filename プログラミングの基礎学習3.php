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
//課題2 わからない
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
//課題3わからない
check_character();
function check_character($suuzi = 5){
	
}
//課題4,1に追記

//課題5

list($name,$born,$adress)=my_data();

echo$name;
echo"</br>\n";
echo$born;
echo"</br>\n";
echo$adress;
echo"</br>\n";
function my_data()
{
	$id=7;
	$name="nakamura masaki";
	$born="1991年9月14日";
	$adress="千葉県松戸市";
	return array($name,$born,$adress);
}

//課題6わからない




list($name4,$born4,$adress4)=whose_data(5);

function whose_data($whose_id){
	
	$name1="nakamura masako";
	$born1="忘れた。";
	$adress1="千葉県柏市";
	$matome1=array($name1,$born1,$adress1);
	
	$name2="nakamura maruo";
	$born2="1950年生まれ";
	$adress2="東京都八王子市";
	$matome2=array($name2,$born2,$adress2);
	
	$name3="nakamura kirito";
	$born3="2008年生まれ";
	$adress3="岐阜県下呂市";
	$matome3=array($name3,$born3,$adress3);
	
	if($whose_id == 1 || 2 || 3 ){
		return $matome1;
	}else if($whose_id == 4 || 5 || 6){
		return $matome2;
	}else{
		return $matome3;
	}
}


?>