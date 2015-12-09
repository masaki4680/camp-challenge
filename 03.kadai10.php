<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
</html>
<?php
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

$limit = 2;//制限
$i = 1;//カウント用

$arr = who_data();

foreach($arr as $value){

	if($limit>=$i){

	foreach($value as $key => $data){

		

		if($key == "adress"){
			              //最初、キーを住所にする
			               if($data == null){
				            //$valueがnullなら飛ばす
				                    continue;}

				                    $title ="住所";
		                    }
		   //飛ばしたうえで、$titleを住所とおく

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
	      $i++;
  }else{
  	break;
  }
}



?>
