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
elseif($i==2){
	echo "プログラミングキャンプ！";
}
elseif($i=="a"){
	echo "文字です!";
}
else{
	echo "その他です！";
}
echo "</br>\n";
//課題7
$param1=10000;//総額
$param2=10;//個数
$param3="生鮮食品";//雑貨、生鮮食品、その他

//①
echo $param3."です。<br>";

//②
echo $param1/$param2."です。";//1個あたりの値段
echo $param1."です。<br>";//総額

//➂
if($param1>=3000){
	echo "ポイントは".$param1*0.04."です。";
}elseif($param1>=5000){
	echo "ポイントは".$param1*0.05."です。";
}else{
	echo"ポイントは0です。";
}


?>