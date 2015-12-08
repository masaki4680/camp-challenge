<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
</html>


<?php
//課題1
print"Hello World.</br>\n";
//課題2
print"groove"."-"."gear</br>\n";
//課題3
print"私は中村誠希(マサキ)です。現在24歳です。</br>\n
		特に他、語るような者ではありません。</br>\n
		よろしくお願いします。</br>\n";
//課題4//課題5
const suugi = 95;
$suugi = 100;
echo suugi*$suugi;
echo "</br>\n";
echo suugi+$suugi;
echo"</br>\n";
echo suugi-$suugi;
echo"</br>\n";
echo suugi/$suugi;
echo"</br>\n";
echo suugi%$suugi;
echo"</br>\n";
//課題6
$i=3;

if($i==1){
echo "1です!";
}
else if($i==2){
	echo "プログラミングキャンプ！";
}
else if($i=="a"){
	echo "文字です!";
}
else{
	echo "その他です！";
}
echo "</br>\n";
//課題7
$param1=$_GET['param1'];//総額
$param2=$_GET['param2'];//個数
$param3=$_GET['param3'];//雑貨、生鮮食品、その他

//①
echo $param3."です。";

//②
echo $param1/$param2."です。";//1個あたりの値段
echo $param1."です。";//総額

//➂
if($param1>=3000){
	echo "ポイントは".$param1*0.04."です。";
}else if($param1>=5000){
	echo "ポイントは".$param1*0.05."です。";
}else{
	echo"ポイントは0です。";
}


?>