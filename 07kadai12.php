<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>
        <?php
//�ۑ�12:�����p�̃t�H�[����p�ӂ��A���O�A�N��A�a�������g���������������ł���悤�ɂ��Ă��������B
require_once("07kadai1.php");

$pdo=connectDb();
//is_string
if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}
//if(!empty($_POST["name"]) || !empty($_POST["age"]) || !empty($_POST["birthday"])){
    //������v���m�肽��
    //OR���ƁAstring�^�Ƃ����T�O�������Ă��܂��Ă�
    $sql = "select * from profiles where ";
    if(!empty($_POST["name"]) && !empty($_POST["age"]) && !empty($_POST["birthday"])){
    $sql .= "name like :name and birthday = :birthday and age = :age";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':name','%'.$_POST["name"].'%',PDO::PARAM_STR);
    $stmt->bindValue(':age',$_POST["age"],PDO::PARAM_INT);
    $stmt->bindValue(':birthday',$_POST["birthday"]);
}
    elseif(!empty($_POST["name"])&&(!empty($_POST["age"]))){
        $sql .= "name like :name and age = :age";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name','%'.$_POST["name"].'%',PDO::PARAM_STR);
        $stmt->bindValue(':age',$_POST["age"],PDO::PARAM_INT);
    }
    elseif(!empty($_POST["name"]) && !empty($_POST["birthday"])){
        $sql .= "name like :name and birthday = :birthday";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name','%'.$_POST["name"].'%',PDO::PARAM_STR);
        $stmt->bindValue(':birthday',$_POST["birthday"]);
    }
    elseif(!empty($_POST["age"]) && !empty($_POST["birthday"])){
        $sql .= "age = :age and birthday = :birthday";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':age',$_POST["age"],PDO::PARAM_INT);
        $stmt->bindValue(':birthday',$_POST["birthday"]);
    }
    elseif(!empty($_POST["age"])){
        $sql .= "age = :age";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':age',$_POST["age"],PDO::PARAM_INT);
    }
    elseif(!empty($_POST["name"])){
    $sql .= "name like :name";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':name','%'.$_POST["name"].'%',PDO::PARAM_STR);
}
    elseif(!empty($_POST["birthday"])){
    $sql .= "birthday =:birthday";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':birthday',$_POST["birthday"]);
}
    
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if(empty($result)){
        echo "��v����f�[�^�[�͂���܂���ł����B";
    }else{
        echo "���ʂ��\������܂����B<br>";
    foreach($result as $data){
        
        foreach($data as $key => $value){
            

            if($key == "profilesID"){
                $title = "ID";
            }else if($key == "name"){
                $title = "���O";
            }else if($key == "age"){
                $title = "�N��";
            }else if($key == "birthday"){
                $title = "���N����";
            }else if($key == "tell"){
                $title = "�d�b�ԍ�";
            }


            echo "$title:$value"."<br>";
        }
    }
    }
//}


        ?>
        <h2>������</h2>
        <form name="search" action="07kadai12.php" method="POST">
            ���O    <input type="text" name="name" placeholder="��F�����V�Y"><br>
            �N��    <input type="text" name="age" placeholder="��F52"><br>
            �a����   <input type="text" name="birthday" placeholder="��:2015-12-15">
            <input type="submit" value="���M">
        </form>

    </body>
</html>

