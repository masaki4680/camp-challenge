<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>
���[�U�[�o�^
<br>
<br>
<?php


// session_start();

require_once("6function.php");

if($_SERVER['REQUEST_METHOD'] != 'POST'){
//����A�N�Z�X
	echo "���͂��Ă�������";


}else{
//�����܂ł��Ă��邩�m�F�B���Ă�
// 	echo "���͂������Ă�������";

$user_id = $_POST["id"];
$user_password = $_POST["password"];

//�����Ă�
// var_dump($user_id);

$err = array();


if($user_id == ""){
	$err["id"] = "ID����͂������Ă�������";
}

if($user_password == ""){
	$err["password"] = "PASSWORD����͂������Ă�������";
}

//�G���[���b�Z�[�W�������Ȃ�������
if(empty($err)){
	//DB�o�^����
$user = new user();

$user->setman($user_id,$user_password);

	//���O�C��
// 	$file = new user;
// 	$profile = $user->getuser($user_id,$user_password);

// 	$_SESSION["profile"] = $profile;


//��ʑJ�ڂ���
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
    <input class="form-password" type="text" name="password" value="" placeholder="�p�X���[�h">
    <span style="color:#ff0000;" class="help-block"><?php echo $err["password"]; ?></span>
</div>

<div class="form-submit">
     <input type="submit" value="�A�J�E���g�쐬">
</div>

</form>
    </body>
</html>