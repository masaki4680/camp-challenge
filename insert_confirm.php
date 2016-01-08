<?php require_once './scriptUtil.php'; ?>
<?php require_once './defineUtil.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録確認画面</title>
</head>
  <body>
    <?php

    //課題3　!emptyの年月日が入ってない
    if(!empty($_POST['name']) && !empty($_POST['type']) && !empty($_POST['tell']) && !empty($_POST['comment']) && !empty($_POST['year']) && !empty($_POST['month']) && !empty($_POST['day']))

    {

        $post_name = $_POST['name'];
        //date型にするために1桁の月日を2桁にフォーマットしてから格納
        $post_birthday = $_POST['year'].'-'.sprintf('%02d',$_POST['month']).'-'.sprintf('%02d',$_POST['day']);
        $post_type = $_POST['type'];
        $post_tell = $_POST['tell'];
        $post_comment = $_POST['comment'];
        $post_year = $_POST['year'];
        $post_month = $_POST['month'];
        $post_day = $_POST['day'];



        //セッション情報に格納
        session_start();
        $_SESSION['name'] = $post_name;
        $_SESSION['birthday'] = $post_birthday;
        $_SESSION['year'] = $post_year;
        $_SESSION['month'] = $post_month;
        $_SESSION['day'] = $post_day;
        $_SESSION['type'] = $post_type;
        $_SESSION['tell'] = $post_tell;
        $_SESSION['comment'] = $post_comment;

    ?>

        <h1>登録確認画面</h1><br>
        名前:<?php echo $post_name;?><br>
        生年月日:<?php echo $post_birthday;?><br>
        種別:<?php echo $post_type?><br>
        電話番号:<?php echo $post_tell;?><br>
        自己紹介:<?php echo $post_comment;?><br>

        上記の内容で登録します。よろしいですか？

        <form action="<?php echo INSERT_RESULT ?>" method="POST">
          <input type="submit" name="yes" value="はい">
          <input type="hidden" name="hidden" value="security">
        </form>
        <form action="<?php echo INSERT ?>" method="POST">
            <input type="submit" name="no" value="登録画面に戻る" >
        </form>

    <?php }else{ ?>

        <h1>入力項目が不完全です</h1><br>
        再度入力を行ってください

        <?php
           session_start();

           if(!empty($_POST['name'])){
           	$_SESSION['name'] = $_POST['name'];
           }else{
           	unset($_SESSION['name']);
           }

           if(!empty($_POST['year'])){
           	$_SESSION['year'] = $_POST['year'];
           }else{
           	unset($_SESSION['year']);
           }

           if(!empty($_POST['month'])){
           	$_SESSION['month'] = $_POST['month'];
           }else{
           	unset($_SESSION['month']);
           }

           if(!empty($_POST['day'])){
           	$_SESSION['day'] = $_POST['day'];
           }else{
           	unset($_SESSION['day']);
           }

           if(!empty($_POST['type'])){
           	$_SESSION['type'] = $_POST['type'];
           }else{
           	unset($_SESSION['type']);
           }

           if(!empty($_POST['tell'])){
           	$_SESSION['tell'] = $_POST['tell'];
           }else{
           	unset($_SESSION['tell']);
           }

           if(!empty($_POST['comment'])){
           	$_SESSION['comment'] = $_POST['comment'];
           }else{
           	unset($_SESSION['comment']);
           }

        ?>
        <form action="<?php echo INSERT ?>" method="POST">
            <input type="submit" name="no" value="登録画面に戻る">
        </form>
    <?php }?>
    <?php echo return_top(); ?>
</body>
</html>