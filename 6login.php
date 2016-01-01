<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>

        <?php
        //ログイン機能
require_once("6function.php");

session_start();

if($_SERVER["REQUEST_METHOD"] != 'POST'){
//初回アクセス
echo "ログイン情報を入力して下さい";
}
else{
	$input_id = $_POST["id"];
	$input_password = $_POST["password"];

	$err = array();

	if(empty($input_id)){
		$err["id"] = "入力されていません";
	}

	if(empty($input_password)){
		$err["password"] = "入力されていません";
	}
	//両方、何等か入ってる場合
	if($input_id && $input_password){
		$user = new user;
		//Falseなら
		if(!$user->getuser($input_id,$input_password)){
			$err["password"] = "IDかPASSWORDどちらか間違ってます";
		}
	}

	if(empty($err)){

		$user = new user;
		$result = $user->getuser($input_id,$input_password);

		$_SESSION["confirm"] = $result;

         header("Location: ./6index.php");
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
     <input type="submit" value="ログイン">
</div>

</form>




    </body>
</html>