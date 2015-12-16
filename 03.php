<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
</html>
<?php


//課題1,4
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

//課題4

$bool = my_profile();

if($bool == true){
      echo "この処理は正しく実行できました。"."<br>";
}else{
      echo "正しく実行できませんでした。"."<br>";
}







?>