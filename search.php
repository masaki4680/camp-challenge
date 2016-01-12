<?php require_once './defineUtil.php'; ?>
<?php require_once './scriptUtil.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>ユーザー情報検索画面</title>
</head>
  <body>
 
<!--   GET→POSTに変更-->
    <form action="<?php echo SEARCH_RESULT ?>" method="POST">
        
        名前:
        <br>
        <input type="text" name="name">
        <br><br>

        生年:
        <br>
        <select name="year">
            <option value="">----</option>
            <?php
            for($i=1950; $i<=2010; $i++){ ?>
              <option value="<?php echo $i;?>"><?php echo $i;?></option>
            <?php } ?>
        </select>年生まれ
        <br><br>

        種別:
        <br>
        <?php
        for($i = 1; $i<=3; $i++){ ?>
        <input type="radio" name="type" value="<?php  echo $i; ?>"><?php echo ex_typenum($i);?><br>
        <?php }
        ?>
        <br>
        <input type="submit" name="btnSubmit" value="検索">
      </form>
  </body>
</html>
