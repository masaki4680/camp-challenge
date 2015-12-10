<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
</html>

<?php
// 課題7:引き数、戻り値はなしの関数を用意。
//初期値3のグローバルな値を2倍していく＋ローカルな値はstaticとして
//その関数が何回実行されたのかを保持していくような関数である。
//この関数を20回呼び出す



//グローバル値
$number=3;

function test(){
	
    global $number;
    
    $number *= 2;
    
    static $count =0;
    
    $count++;
    
    echo $count."回";
   

echo $number."<br>";

}


for($i=0;$i<20;$i++){
	test();
}
?>