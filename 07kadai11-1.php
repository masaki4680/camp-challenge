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
if(empty($_POST["profilesID"])){
    echo"profilesID����͂��Ă�������";
}
else{
    $sql = "select * from profiles where profilesID = :profilesID";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':profilesID',$_POST["profilesID"],PDO::PARAM_STR);
    $stmt->execute();}
        ?>
        <form name="update" action="07kadai11-2.php" method="POST">
            ID     <input type="text" name="profilesID" placeholder="��F9"><br>
            <input type="submit" value="���M">
        </form>
    </body>
</html>
