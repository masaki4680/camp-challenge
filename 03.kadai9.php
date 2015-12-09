<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
</html>

<?php
//課題9
//課題6の3人分のプロフィールのうち1人だけ住所が値nullの状態で定義し、foreachで全員分のプロフィールをid以外表示する処理を実行する。この際、歯抜けになっているデータはcontinueで飛ばす
//表示されない。

function who_data(){
	$member = array(array("id" => 3,
			              "name" => "田中マルクス闘離王",
			              "age" => "21",
			              "tall" => "170cm",
			              "adress" => null),
			        array("id" => 5,
			              "name" => "中村誠希",
			              "age" => "32",
			              "tall" => "190cm",
			              "adress" => "千葉県柏市"),
			        array("id" => 7,
			              "name" => "日本",
			              "age" => "2015",
			              "tall" => "42.195km",
			              "adress" => "地球の中心")
	);
	return $member;
}

$arr = who_data();

foreach($arr as $value){
   
	foreach($value as $key => $data){
		
	
	if($key == "adress"){
		//最初、キーを住所にする
		if($data == null){
			//$valueがnullなら飛ばす
			continue;
		}
		//飛ばしたうえで、$titleを住所とおく
		$title = "住所";}

		if($key == "name"){
			$title = "名前";
		}else if($key == "age"){
			$title = "年齢";
		}else if($key == "tall"){
			$title = "身長";
		}else if($key == "id"){
			continue;
		}

			

		echo "$title:$data";
		echo"<br>";
	}
}



?>