<!DOCTYPE html>
<html lang="ja">
    <meta charset="utf-8">
</html>
<?PHP
//３．クッキーに現在時刻を記録し、次にアクセスした際に、前回記録した日時を表示してください。



if (!isset($_COOKIE["Lastlogintime"])){//初回アクセス時
    
    $access_time=date("Y年m月d日　H時i分s秒");
    
    setcookie("Lastlogintime",$access_time);
    
    echo "初回のアクセスです。";
    
}else{//2回目以降のログイン
   
    if(!isset($_COOKIE["Nexttime"])){//nexttimeがないとき
        
        $last_login_time = $_COOKIE["Lastlogintime"];
    
    echo "1回目のアクセス時は".$last_login_time;
        
        $number=1;
    
    }else{//nexttimeがあるとき
        
        $number=$_COOKIE["number"];
        
        $next_time = $_COOKIE["Nexttime"];
        
        echo $number."回目のアクセス時は".$next_time;
        
    
    }
    
    $number++;
    
    setcookie("number",$number);
    
    $login_time = date("Y年m月d日　H時i分s秒");
    
    setcookie("Nexttime",$login_time);
        
    
        
    }

?>