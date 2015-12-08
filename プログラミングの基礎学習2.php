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
$eight=8;
for($i=1;$i<21;$i++){
	
	$eight=$eight*8;
	
}
echo $eight;
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
?>
