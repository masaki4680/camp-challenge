<?php 
require_once './defineUtil.php';
require_once './scriptUtil.php';
require_once './dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>更新結果画面</title>
</head>
  <body>
    
<?php
                
  
//updateを行う。
$id = $_GET['id'];
$name = $_POST['name'];
$birthday_arr = array($_POST['year'],$_POST['month'],$_POST['day']);
$birthday = implode("-",$birthday_arr);
$type = $_POST['type'];
$tell = $_POST['tell'];
$comment = $_POST['comment'];



//入力されてるか確認する
if(empty($name) || empty($_POST['year']) || empty($_POST['month']) || empty($_POST['day']) || empty($type) || empty($tell) || empty($comment)){
    
    echo "入力されてない項目があります。";
    ?>
      <form action="<?php echo UPDATE;?>?id=<?php echo $_GET['id']; ?>" method="POST">
          <input type="submit" value="編集画面に戻る">
      </form>
    <?php
}else{


 
    $result = update_profile($id,$name,$birthday,$type,$tell,$comment);
    //エラーが発生しなければ表示を行う

    if(!isset($result)){
    ?>
    <h1>更新確認</h1>
    以上の内容で更新しました。<br>
    <?php
    }else{
        echo 'データの更新に失敗しました。次記のエラーにより処理を中断します:'.$result;
    
    }
}
    echo return_top(); 
    ?>
  </body>
</html>
