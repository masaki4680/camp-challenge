<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
</html>

<?php
//課題3:引き数が3つの関数を定義する。1つ目は適当な数値を、2つ目はデフォルト値が5の数値を、最後はデフォルト値がfalseの$typeを引き数として定義する。
//1つ目の引き数に2つ目の引き数を掛ける計算をする関数を作成し、$typeがfalseの時はその値を表示、trueのときはさらに累乗して表示する。


//適当な数値を５とする。



$ans = check_character(5);

function check_character($about,$default=5,$type=false){

	$answer = $about*$default;

	if($type == false){

		return $answer;

	}else if($type == true){

		return $answer*$answer;

	}


}

echo $ans;




?>