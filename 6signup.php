<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>
ユーザー登録
<br>
<br>
<?php


// session_start();

require_once("6function.php");

if($_SERVER['REQUEST_METHOD'] != 'POST'){
//初回アクセス
	echo "入力してください";


}else{
//ここまできているか確認。きてる
// 	echo "入力し直してください";

$user_id = $_POST["id"];
$user_password = $_POST["password"];

//入ってる
// var_dump($user_id);

$err = array();


if($user_id == ""){
	$err["id"] = "IDを入力し直してください";
}

if($user_password == ""){
	$err["password"] = "PASSWORDを入力し直してください";
}

//エラーメッセージが何もなかった時
if(empty($err)){
	//DB登録完了
$user = new user();

$user->setman($user_id,$user_password);

	//ログイン
// 	$file = new user;
// 	$profile = $user->getuser($user_id,$user_password);

// 	$_SESSION["profile"] = $profile;


//画面遷移する
	header("Location: ./6login.php");

	exit;
}

}
?>
<form name="user" method="post">

<div class="form-id">
     <input class="form-id" type="text" name="id" value="" placeholder="ID" />
    <span style="color:#ff0000;" class="help-block"><?php echo $err["id"]; ?></span>
</div>



<div class="form-password">
    <input class="form-password" type="text" name="password" value="" placeholder="パスワード">
    <span style="color:#ff0000;" class="help-block"><?php echo $err["password"]; ?></span>
</div>

<div class="form-submit">
     <input type="submit" value="アカウント作成">
</div>

</form>
    </body>
</html>