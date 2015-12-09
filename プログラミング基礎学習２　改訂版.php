<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
</html>
<?php
//課題1
$num = 2;
switch($num){
	case 1:
		echo "one";
		break;
	case 2:
		echo "two";
		break;
	default:
		
		echo "想定外";
	
}
echo"</br>\n";

//課題2
$nub="あ";
switch($nub){
	case"A":
		echo "英語";
		break;
	case"あ":
	    echo "日本語";
	    break;
	default:
}
echo "</br>\n";

//課題3 わからん
$answer=1;
for($i=0;$i<20;$i++){
	
	$answer *= 8;
	//$answer = $answer*8
}
echo $answer;
echo"</br>\n";
//課題4

for($s=1;$s<31;$s++){
	$string.="A";
}
echo $string;
echo "</br>\n";
//課題5
$total=0;
for($r=0;$r<101;$r++){
	$total += $r;
	"</br>\n";
}
echo "0～100までの数字を足すと".$total."です。</br>\n";
//課題6
$k=1000;
while($k>=100){
	$k = $k/2;

}
echo "1000を割り続け100より小さくなる最初の数字は"."$k"."です</br>\n";
//課題7
$arr=array("10","100","soeda","hayashi","-20","118","END");
echo $arr["2"];
echo"</br>\n";
//課題8
$arr["2"]=33;
echo $arr["2"];
echo"</br>\n";
//課題9
$arr2=array(
	"1" => "AAA",
    "hello" => "world",
	"soeda"=>"33",
	"20" => "20",
);
echo $arr2["1"];

//課題10(応用)
//簡易素因数分解のロジックを作成します。

//  クエリストリングから渡された数値を1ケタの素数で可能な限り分解し、
//  元の値と素因数分解の結果を表示するようにしてください。
//  2ケタ以上の素数が含まれた数値の場合は、
// 「元の値　1ケタの素因数　その他」と表記して、その他　に含んでください。



$param = $_GET["param"];//ある数字を受け取る

if($param == 1){
	echo "素因数分解できない";
}else{

 echo "元の値は".$param;
 echo "<br>";

 $p =2;//割る数字の初期値

while($param != 1){
	
	if($param%$p == 0){
		$param = $param/$p;
		if($p>9){
			echo $p."はその他";
			echo "<br>";
		}else{
			echo $p."は1桁の素因数";
			echo"<br>";
		}
//同じ値で何回割り切れたかをどう表示するのかわからない。
	                 }else{
		     $p++;
		     
	           }
  }

}
?>
