<!DOCTYPE html>
<html lang="ja">
    <meta charset="utf-8">
</html>
<?PHP
//９．ファイルから自己紹介を書き出し保存してください

//書き込みで開く
$fp = fopen('04kadai8.txt','w');
//書き込み操作１行書き込み
fwrite($fp,'中村マサキです');
//ファイルを閉じる
fclose($fp);



?>