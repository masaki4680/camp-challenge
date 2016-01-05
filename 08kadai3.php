<?php
// ３．baseという抽象クラスを作成し、以下を実装してください。
// 　　・loadというprotectedな関数を用意してください。
// 　　・showという公開関数を用意してください。

require_once("08kadai0.php");

$pdo = connectDb();

abstract class base{

	//継承先クラスにprotected以上のloadというメソッドを実装すること
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