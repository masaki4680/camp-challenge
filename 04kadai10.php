<!DOCTYPE html>
<html lang="ja">
    <meta charset="utf-8">
</html>
<?PHP
//１０．紹介していないPHPの組み込み関数を利用して、処理を作成してください。
//
//    講義では紹介されていないPHPの組み込み関数はたくさん存在します。
//    PHPの公式サイトから関数を選び、実際にロジックを作成してみてください。
//
//
//    また、この処理を作成するに当たり、下記を必ず実装してください。
//
//    ①処理の経過を書き込むログファイルを作成する。
//    ②処理の開始、終了のタイミングで、ログファイルに開始・終了の書き込みを行う。
//    ③書き込む内容は、「日時　状況（開始・終了）」の形式で書き込む。
//    ④最後に、ログファイルを読み込み、その内容を表示してください。

$fp = fopen("04kadai.logfile.txt",'w');

$start_time=microtime(true);

$open_time = "開始時間".date("Y/m/d H:i:s",$start_time)."\n";

fwrite($fp,"$open_time");

$end_time=microtime(true);

$close_time = "終了時間".date("Y/m/d H:i:s",$end_time)."\n";

fwrite($fp,"$close_time");

$process_time = $end_time - $start_time;

$mid_time = "処理時間".sprintf("%0.9f",$process_time);

fwrite($fp,"$mid_time");

fclose($fp);
?>