<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
//保存先
$file_dir = "C:\develop\image\\";
//実際の名前と保存先を格納
$file_path = $file_dir.$_FILES["uploadfile"]["name"];
//ファイルを移動
if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"],$file_path)){

    echo $file_path;
    
    $lines = file_get_contents("$file_path");
    $contents = str_replace("\n","<br>\n","$lines");
    echo $contents."<br>";

    echo "アップロードが完了しました。"."<br>";
        

}else{

    echo "正常にアップロードされていませんでした。";
}
        ?>
    </body>
</html>