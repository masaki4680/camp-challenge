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

if(empty($_POST["name"]) && empty($_POST["age"]) && empty($_POST["birthday"])){
    echo "どれか入力してください";
}else{


$sql = "select * from profiles where ";

$flag = false;

if(!empty($_POST["name"])) {
    $sql .= "name like :name ";
    $flag = true;
}
if(!empty($_POST["age"])){
    if($flag == false){
        $sql .= "age = :age";
        $flag = true;
    }else{
        $sql .= "and age = :age ";
    } 
}
if(!empty($_POST["birthday"])){
    if($flag == false){
        $sql .= "birthday = :birthday";
    }else{
        $sql .= "and birthday = :birthday";
    }
}

$stmt = $pdo->prepare($sql);




if(!empty($_POST["name"])){
    $stmt->bindValue(":name",'%'.$_POST["name"].'%');
}

if(!empty($_POST["age"])){
    $stmt->bindValue(":age",$_POST["age"]);
}

if(!empty($_POST["birthday"])){
    $stmt->bindValue(":birthday",$_POST["birthday"]);
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
}


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

