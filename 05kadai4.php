<!DOCTYPE html>
<html lang="ja">
    <meta charset="utf-8">
</html>
<?PHP
//4.セッションに現在時刻を記録し、次にアクセスした際に、前回記録した日時を表示してください。
session_start();

if(!isset($_SESSION["login"])){
    
    $_SESSION["login"] = date("Y-m-d H-i-s");
    
    
    echo "初めてのアクセスです。";
    
}else{
    
    if(!isset($_SESSION["second"])){
        
        echo "1回目のアクセス日時は".$_SESSION["login"];
        
        $_SESSION["visited"] = 1;
        
    }else{
        
        echo $_SESSION["visited"]."回目のアクセス日時は".$_SESSION["second"];
        
    }
    
    $_SESSION["second"] = date("Y-m-d H-i-s");
          
    $_SESSION["visited"]++;
        
}
?>