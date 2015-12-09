<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
</html>

<?php
//課題3:引き数が3つの関数を定義する。1つ目は適当な数値を、2つ目はデフォルト値が5の数値を、最後はデフォルト値がfalseの$typeを引き数として定義する。
//1つ目の引き数に2つ目の引き数を掛ける計算をする関数を作成し、$typeがfalseの時はその値を表示、trueのときはさらに累乗して表示する。

//自身あるけどあってるかわかない

//適当な数値を５とする。
$tekitou =5;

check_character1($tekitou);

function check_character1($about,$default=5,$type=false){

}

function check_number2(){

	$answer=$tekitou*$default;

}

if($type=false){

	echo $answer;
}

if($type=true){

	echo $answer*$answer;

}

?>