<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>
<?php
//�ۑ�5�Fname�Ɂu�΁v���܂ޏ����擾���A��ʂɎ擾��������\�����Ă�������
require_once("07kadai1.php");

$pdo=connectDb();

if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}

$sql = "select * from profiles where name like :name";
$stmt = $pdo->prepare($sql);
$name = "%��%";
$stmt->bindValue(':name',$name,PDO::PARAM_STR);
$stmt->execute();
$data=$stmt->fetch(PDO::FETCH_ASSOC);
foreach($data as $value){
    echo $value."<BR>";
}

        ?>
    </body>
</html>
