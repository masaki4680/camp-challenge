<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>

        <?php
        //���O�C���@�\
require_once("6function.php");

session_start();

if($_SERVER["REQUEST_METHOD"] != 'POST'){
//����A�N�Z�X
echo "���O�C��������͂��ĉ�����";
}
else{
	$input_id = $_POST["id"];
	$input_password = $_POST["password"];

	$err = array();

	if(empty($input_id)){
		$err["id"] = "���͂���Ă��܂���";
	}

	if(empty($input_password)){
		$err["password"] = "���͂���Ă��܂���";
	}
	//�����A�����������Ă�ꍇ
	if($input_id && $input_password){
		$user = new user;
		//False�Ȃ�
		if(!$user->getuser($input_id,$input_password)){
			$err["password"] = "ID��PASSWORD�ǂ��炩�Ԉ���Ă܂�";
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
    <input class="form-password" type="text" name="password" value="" placeholder="�p�X���[�h">
    <span style="color:#ff0000;" class="help-block"><?php echo $err["password"]; ?></span>
</div>

<div class="form-submit">
     <input type="submit" value="���O�C��">
</div>

</form>




    </body>
</html>