<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>

        <?php
//�ۑ�11:profileID�Ŏw�肵�����R�[�h�́AprofileID�ȊO�̗v�f�����ׂď㏑���ł���t�H�[�����쐬���Ă�������

//������\������Ȃ�
require_once("07kadai1.php");

$pdo=connectDb();
//is_string,�^����ꂽ��񂪕����񂩂ǂ����m�F����
if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}

echo $_POST["profilesID"]."�̃f�[�^�[����͂��Ă�������";


        ?>
        <form name="update" action="07kadai13-5.php" method="POST">
            <input type="hidden" name="profilesID" value="<?php echo $_POST["profilesID"]; ?>">
            ���O<input type="text" name="name" placeholder="��F�����V�Y"><br>
            �d�b�ԍ�<input type="text" name="tell" placeholder="��:080-0000-0000"><br>
            �N��    <input type="text" name="age" placeholder="��F52"><br>
            �a����   <input type="text" name="birthday" placeholder="��:2015-12-15">
            <input type="submit" value="���M">
        </form>
        <br>
        <br>
        <a href="./07kadai13-1.php">�߂�</a>
        <br>
        <br>
        <a href="./07kadai13-0.php">HOME</a>
    </body>
</html>