<!DOCTYPE html>
<html lang="ja">
    <meta charset="utf-8">
</html>
<?PHP
//７．以下の文章の「I」⇒「い」に、「U」⇒「う」に入れ替える処理を作成し、
//    結果を表示してください。
//    「きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます」
$mozi="きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます";
//変数が文字とわかっているんであれば、囲う必要ない
$amozi = str_replace('I','い',$mozi);
echo str_replace('U','う',$amozi);
?>