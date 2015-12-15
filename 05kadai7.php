<!DOCTYPE html>
<html lang="ja">
   <head>
       <meta charset="UTF-8">
   </head>
    <body>
        <?php

session_start();

if(empty($_POST["name"]) || empty($_POST["sex"]) || empty($_POST["hobby"])){
    
    echo "以下のデータを全て入力してください";
  
}else{
    echo "以下のデーターが入力されました";
    $name=$_POST["name"];
    
    $_SESSION["name"]=$name;
    
    $hobby=$_POST["hobby"];
    
    $_SESSION["hobby"]=$hobby;
    
    $_SESSION["sex"]=$_POST["sex"];
    
}

        ?>
      
       <form action="05kadai7.php" method="post">
          
           名前:<input type="text" name="name" value="<?php if(isset($_SESSION["name"])){ echo $_SESSION["name"];} ?>"><br>
           
           性別:男 <input type="checkbox" name="sex" value="男" <?php if(isset($_SESSION["sex"])){if(($_SESSION["sex"])=="男"){echo "checked";}} ?> > 女: <input type="checkbox" name="sex" value="女" <?php if(isset($_SESSION["sex"])){if(($_SESSION["sex"])=="女"){echo "checked";}} ?> ><br>
           
           趣味:<textarea name="hobby"><?php if(isset($_SESSION["hobby"])){ echo $_SESSION["hobby"];} ?></textarea><br>
        <input type="submit" value="送信">
        </form>
    </body>
</html>


