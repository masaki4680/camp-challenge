<!DOCTYPE html>
<html lang="ja">
    <meta charset="utf-8">
</html>
<?PHP
//９．ファイルから自己紹介を読み出し、表示してください。
//file関数：配列で格納する関数
$lines = file('04kadai8.txt');
foreach($lines as $ziko){
    echo $ziko."<br>";
}

$lines = file_get_contents('04kadai8.txt');
$contents = str_replace("\n","<br>\n","$lines");
echo $contents;

?>