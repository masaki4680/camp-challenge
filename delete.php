<?php 
require_once './defineUtil.php';
require_once './scriptUtil.php';
require_once './dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>削除確認画面</title>
</head>
  <body>
    <?php
    $result = profile_detail($_GET['id']);
    //エラーが発生しなければ表示を行う
    if(is_array($result)){
    ?>
    <h1>削除確認</h1>
    以下の内容を削除します。よろしいですか？
    名前:<?php echo $result[0]['name'];?><br>
    生年月日:<?php echo $result[0]['birthday'];?><br>
    種別:<?php echo ex_typenum($result[0]['type']);?><br>
    電話番号:<?php echo $result[0]['tell'];?><br>
    自己紹介:<?php echo $result[0]['comment'];?><br>
    登録日時:<?php echo date('Y年n月j日　G時i分s秒', strtotime($result[0]['newDate'])); ?><br>
    
    <form action="<?php echo DELETE_RESULT; ?>?id=<?php echo $_GET['id']; ?>" method="POST">
      <input type="submit" name="YES" value="はい"style="width:100px">
    </form>
    <form action="<?php echo RESULT_DETAIL; ?>?id=<?php echo $_GET['id']; ?>" method="POST">
      <input type="submit" name="NO" value="詳細画面に戻る"style="width:100px">
    </form>
    
    <?php
    }else{
        echo 'データの取得に失敗しました。次記のエラーにより処理を中断します:'.$result;
    }
    echo return_top(); 
    ?>
   </body>
</html>
