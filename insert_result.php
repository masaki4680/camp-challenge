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
    $year = $_SESSION['year'];
    $month = $_SESSION['month'];
    $day = $_SESSION['day'];
    $type = $_SESSION['type'];
    $tell = $_SESSION['tell'];
    $comment = $_SESSION['comment'];

    //db接続を確立
    $insert_db = connect2MySQL();

    //dbにinsertする
    $result = insert($insert_db,$name,$birthday,$tell,$type,$comment);

    //接続オブジェクトを初期化することでDB接続を切断
    $insert_db=null;
    ?>

    <h1>登録結果画面</h1><br>
    名前:<?php echo $name;?><br>
    生年月日:<?php echo $birthday;?><br>
    種別:<?php echo $type?><br>
    電話番号:<?php echo $tell;?><br>
    自己紹介:<?php echo $comment;?><br>
    以上の内容で登録しました。<br>

    <?php unset($name); ?>
    <?php unset($year); ?>
    <?php unset($month); ?>
    <?php unset($birthday); ?>
    <?php unset($day); ?>
    <?php unset($type); ?>
    <?php unset($tell); ?>
    <?php unset($comment); ?>

    <?php echo return_top(); ?>

</body>

</html>
