<!DOCTYPE html>
<html lang="ja">
    <meta charset="utf-8">
    <head>
        <title>１．以下の入力フィールドを持った入力データをPHPで処理できるHTMLを記述してください。
            ・名前（テキストボックス）、性別（ラジオボタン）、趣味（複数行テキストボックス）</title>
    </head>
    <body>
        <form action="05kadai2.php" method="POST">
            <h3>名前</h3>
            <input type="text" name="name"><br><br>
            <h3>性別</h3>
            男<input type="radio" name="sex" value="男">
            女<input type="radio" name="sex" value="女"><br><br>
            <h3>趣味</h3>
            <textarea type="text" name="hobby" cols="100" rows="10"></textarea><br>
            <input type="submit" name="send">
        </form>
    </body>
</html>
