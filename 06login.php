<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>

        <?php
require_once("06kadai6.php");


if(empty($_POST['id']) || empty($_POST['password'])){
    echo "������x�L�����Ă�������";
    ?>
        <form name="user" action="06login.php" method="post">
            ID:<input type="text" name="id" placeholder="��:3"><br>
            PASSWORD:<input type="text" name="password" placeholder="�S���œ��͂��Ă�������"><br>
            <input type="submit" value="���M">
        </form>
<?php

}else{
$user = new user;
$user->setmen($_POST['id'],$_POST['password']);
echo "�o�^���������܂����B<br>";
?>
���i��o�^���Ă��������B<br>
<form name="com" action="06edit.php" method="post">
    ���i��:<input type="text" name="name"
placeholder="��F�^�����`����">
<input type="submit" value="���M"></form>

<?php 
    }
?>
   

    </body>
</html>