<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="shift_jis">
    </head>
    <body>
        <?php
//課題12:検索用のフォームを用意し、名前、年齢、誕生日を使った複合検索ができるようにしてください。
require_once("07kadai1.php");

$pdo=connectDb();
//is_string
if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}
//if(!empty($_POST["name"]) || !empty($_POST["age"]) || !empty($_POST["birthday"])){
    //部分一致が知りたい
    //ORだと、string型という概念が入ってしまってる
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
        echo "一致するデーターはありませんでした。";
    }else{
        echo "結果が表示されました。<br>";
    foreach($result as $data){
        
        foreach($data as $key => $value){
            

            if($key == "profilesID"){
                $title = "ID";
            }else if($key == "name"){
                $title = "名前";
            }else if($key == "age"){
                $title = "年齢";
            }else if($key == "birthday"){
                $title = "生年月日";
            }else if($key == "tell"){
                $title = "電話番号";
            }


            echo "$title:$value"."<br>";
        }
    }
    }
//}


        ?>
        <h2>検索窓</h2>
        <form name="search" action="07kadai12.php" method="POST">
            名前    <input type="text" name="name" placeholder="例：武藤遊戯"><br>
            年齢    <input type="text" name="age" placeholder="例：52"><br>
            誕生日   <input type="text" name="birthday" placeholder="例:2015-12-15">
            <input type="submit" value="送信">
        </form>

    </body>
</html>

