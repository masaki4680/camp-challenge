<?php require_once './scriptUtil.php'; ?>
<?php require_once './dbaccesUtil.php'; ?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録結果画面</title>
</head>
<body>

    <?php
    if(empty($_POST['hidden'])){
    	echo "エラー TOPページからアクセスしてください。<br><br>";

    	echo return_top();

    	exit;
    }
    session_start();
    $name = $_SESSION['name'];
    $birthday = $_SESSION['birthday'];
    $type = $_SESSION['type'];
    $tell = $_SESSION['tell'];
    $comment = $_SESSION['comment'];

    //db接続を確立
    $insert_db = connect2MySQL();

    $insert_result = insert($name,$birthday,$type,$tell,$comment);
    ?>

    <h1>登録結果画面</h1><br>
    名前:<?php echo $name;?><br>
    生年月日:<?php echo $birthday;?><br>
    種別:<?php echo $type?><br>
    電話番号:<?php echo $tell;?><br>
    自己紹介:<?php echo $comment;?><br>
    以上の内容で登録しました。<br>

    <?php echo return_top(); ?>

</body>

</html>
