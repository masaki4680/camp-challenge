<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>

        <?php

require_once("07kadai1.php");

$pdo=connectDb();
//is_string
if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}


        ?>
        <h3>
            �e�[�u�����쐬���Ă�������  
        </h3>

        <br>
        <form name="create" action="07kadai13-9.php" method="POST">
            �e�[�u����    <input type="text" name="table" placeholder="���͂��Ă�������"><br><br>
            �J����1    <input type="text" name="karamu1" placeholder="���͂��Ă�������">�^:<select name="size1">
            <option value="1">varchar(255)</option>
            <option value="2" selected>int(11)</option>
            </select><br>
            �J����2    <input type="text" name="karamu2" placeholder="���͂��Ă�������">�^:<select name="size2">
            <option value="1">varchar(255)</option>
            <option value="2" selected>int(11)</option>
            </select><br>
            <input type="submit" value="���M">
            <br>
            <a href="./07kadai13-0.php">HOME</a>

        </form>
    </body>
</html>