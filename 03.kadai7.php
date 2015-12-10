<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
</html>

<?php
// 課題7:引き数、戻り値はなしの関数を用意。
//初期値3のグローバルな値を2倍していく、ローカルな値はstaticとして
//その関数が何回実行されたのかを保持していくような関数である。
//この関数を20回呼び出す



//グローバル値
$initial_number=3;

function test(){
	global $initilal_number;

	$local_number=$initilal_number*2;
	//何回実行したのかを保持するやり方がわからない。
	static $local_number;

	static $count = 0;

	 $count++;

	 echo $count."回";



}


for($i=0;$i<20;$i++){
	test();
}
?>