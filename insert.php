<?php require_once './scriptUtil.php'; ?>
<?php require_once './defineUtil.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>登録画面</title>
</head>
<body>
<?php

//初回入力


if(empty($_POST["hidden"])){
	?>
<form action="<?php echo INSERT_CONFIRM ?>" method="POST">
名前:
    <input type="text" name="name">
    <br><br>

    生年月日:　
    <select name="year">
        <option value="" >----</option>
        <?php
        for($i=1950; $i<=2010; $i++){ ?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php } ?>
    </select>年
    <select name="month">
        <option value="" >--</option>
        <?php
        for($i = 1; $i<=12; $i++){?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php } ;?>
    </select>月
    <select name="day">
        <option value="" >--</option>
        <?php
        for($i = 1; $i<=31; $i++){ ?>
        <option value="<?php echo $i; ?>"><?php echo $i;?></option>
        <?php } ?>
    </select>日
    <br><br>

    種別:
    <br>
    <input type="radio" name="type" value="エンジニア" checked>エンジニア<br>
    <input type="radio" name="type" value="営業">営業<br>
    <input type="radio" name="type" value="その他">その他<br>
    <br>

    電話番号:
    <input type="text" name="tell">
    <br><br>

    自己紹介文
    <br>
    <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard"></textarea><br><br>

    <input type="submit" name="btnSubmit" value="確認画面へ">
    </form>
<?php echo return_top(); ?>

<?php
exit;
}
?>

<?php
session_start();

$name = $_SESSION['name'];
$tell = $_SESSION['tell'];
$type = $_SESSION['type'];
$comment = $_SESSION['comment'];
$year = $_SESSION['year'];
$month = $_SESSION['month'];
$day = $_SESSION['day'];
?>
    <form action="<?php echo INSERT_CONFIRM ?>" method="POST">
    名前:
    <input type="text" name="name" value="<?php if(!empty($name)){echo $name;}?>">
    <br><br>

    生年月日:　
    <select name="year">
        <option value="" ><?php if(!empty($year)){echo $year;}else{echo "----";}?></option>
        <?php
        for($i=1950; $i<=2010; $i++){ ?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php } ?>
    </select>年
    <select name="month">
        <option value="" ><?php if(!empty($month)){echo $month;}else{echo "--";}?></option>
        <?php
        for($i = 1; $i<=12; $i++){?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php } ;?>
    </select>月
    <select name="day">
        <option value="" ><?php if(!empty($day)){echo $day;}else{echo "--";}?></option>
        <?php
        for($i = 1; $i<=31; $i++){ ?>
        <option value="<?php echo $i; ?>"><?php echo $i;?></option>
        <?php } ?>
    </select>日
    <br><br>

    種別:
    <br>
    <input type="radio" name="type" value="エンジニア"<?php if($type == "エンジニア"){ echo "checked";}?>>エンジニア<br>
    <input type="radio" name="type" value="営業"<?php if($type == "営業"){ echo "checked";}?>>営業<br>
    <input type="radio" name="type" value="その他"<?php if($type == "その他"){ echo "checked";}?>>その他<br>
    <br>

    電話番号:
    <input type="text" name="tell" value="<?php if(!empty($tell)){echo $tell;}?>">
    <br><br>

    自己紹介文
    <br>
    <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard"><?php if(!empty($comment)){echo $comment;}?></textarea><br><br>

    <input type="submit" name="btnSubmit" value="確認画面へ">
    </form>
    <?php echo return_top(); ?>
</body>
</html>
