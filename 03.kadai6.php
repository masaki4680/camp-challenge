<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
</html>

<?php
//課題6
//引き数に1つのid(数値)をとり、3人分のプロフィール(項目は課題5参照)をあらかじめ関数内で定義しておく。
//引き数のid値により戻り値として返却するプロフィールを誰のものにするか選択する。それ以降などは課題5と同じ扱いに


function whose_data($who_id){

	$member1 = array("id" => 3,
			"name" => "田中だよ",
			"age"  => "21だよ",
			"tall" => "170cm",
			"adress" => null);
	$member2 = array("id" => 5,
			"name" => "中村だよ",
			"age"  => "22だよ",
			"tall" => "175cm",
			"adress" => "千葉県柏市");
	$member3 = array("id" => 7,
			"name" => "日本だよ",
			"age"  => "2015だよ",
			"tall" => "182cm",
			"adress" => "神奈川県横浜市");

	if($who_id == 3){
		return $member1;
	}else if($who_id == 5){
		return $member2;
	}else if($who_id == 7){
		return $member3;
	}
}

$profile = whose_data(3);

echo "名前は".$profile["name"];
echo "<br>";
echo "年齢は".$profile["age"];
echo "<br>";
echo "身長は".$profile["tall"];
echo "<br>";
echo "住所は".$profile["adress"];
?>