<?php
// �R�Dbase�Ƃ������ۃN���X���쐬���A�ȉ����������Ă��������B
// �@�@�Eload�Ƃ���protected�Ȋ֐���p�ӂ��Ă��������B
// �@�@�Eshow�Ƃ������J�֐���p�ӂ��Ă��������B

require_once("08kadai0.php");

$pdo = connectDb();

abstract class base{

	//�p����N���X��protected�ȏ��load�Ƃ������\�b�h���������邱��
	protected function load();

	function show();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="shift_jis">
</head>
<body>
<form name="create" method="post">
<div class="">
</div>
</form>
</body>
</html>