<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>
        <?php
//�ۑ�8:�����p�̃t�H�[����p�ӂ��A���O�̕�����v�Ō������\�����鏈�����\�z���Ă��������B�����y�[�W�Ƀ��_�C���N�g����POST�����ƁAPOST�ɒl�������Ă��邩�̏�����������p����΁A���.php�Ŋ����ł��܂��̂ŁA�`�������W���Ă݂Ă�������
require_once("07kadai1.php");
//PDO�ɐڑ�����
$pdo=connectDb();
//is_string,�^����ꂽ��񂪕����񂩂ǂ����m�F����
if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}

if(empty($_POST["search"])){
    echo "���͂��Ă��������B";
}else{
    $search_key = '%'.$_POST["search"].'%';
    $sql = "select * from profiles where name like :name";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':name',$search_key,PDO::PARAM_STR);
    $stmt->execute();
    $content = $stmt->fetch(PDO::FETCH_ASSOC);
    
    foreach($content as $answer){
        echo $answer."<br>";
    }
}
?>
        <form name="search" action="07kadai8.php" method="POST">
            ����:<input type="text" name="search" >
            <input type="submit" value="����">
        </form>

    </body>
</html>



    









