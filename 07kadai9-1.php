<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>
        <?php
//�ۑ�9:�t�H�[������f�[�^��}���ł��鏈�����\�z���Ă��������B
require_once("07kadai1.php");

$pdo=connectDb();
//is_string
if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}

if(empty($_POST["profilesID"]) || empty($_POST["name"]) || empty($_POST["tell"]) || empty($_POST["age"]) || empty($_POST["birthday"])){
    echo "���͂��Ă�������";
}else{
    $sql = "INSERT INTO profiles(profilesID,name,tell,age,birthday)
    VALUES(:profilesID,:name,:tell,:age,:birthday)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':profilesID',$_POST["profilesID"],PDO::PARAM_INT);
    $stmt->bindValue(':name',$_POST["name"],PDO::PARAM_STR);
    $stmt->bindValue(':tell',$_POST["tell"]);
    $stmt->bindValue(':age',$_POST["age"],PDO::PARAM_INT);
    $stmt->bindValue(':birthday',$_POST["birthday"]);
    $stmt->execute();
   echo "�f�[�^�[��ǉ����܂����B";
}
        ?>
        <form name="insert" action="07kadai9-1.php" method="POST">
            ID     <input type="text" name="profilesID" placeholder="��F9"><br>
            ���O    <input type="text" name="name" placeholder="��F�����V�Y"><br>
            �d�b�ԍ�<input type="text" name="tell" placeholder="��:080-0000-0000"><br>
            �N��    <input type="text" name="age" placeholder="��F52"><br>
            �a����   <input type="text" name="birthday" placeholder="��:2015-12-15">
            <input type="submit" value="���M">
        </form>

    </body>
</html>






























