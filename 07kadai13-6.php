<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>

        <?php
//�ۑ�10:profileID�Ŏw�肵�����R�[�h���폜�ł���t�H�[�����쐬���Ă�������

//������\������Ȃ�
require_once("07kadai1.php");

$pdo=connectDb();
//is_string,�^����ꂽ��񂪕����񂩂ǂ����m�F����
if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}
if(empty($_POST["profilesID"])){
    echo"���͂��Ă�������";
}
else{
    $sql = "delete from profiles where profilesID = :profilesID";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':profilesID',$_POST["profilesID"],PDO::PARAM_STR);
    $stmt->execute();
    echo "�폜����܂����B"."<br>";}
        ?>
        <form name="delete" action="07kadai13-6.php" method="POST">
            ID     <input type="text" name="profilesID" placeholder="��F9"><br>
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
