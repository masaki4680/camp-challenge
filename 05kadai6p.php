<!DOCTYPE html>
<html lang="ja">
   <head>
       <meta charset="utf-8">
   </head>
    <body>
<?php
//保存先
$file_dir = "C:\Dropbox\develop\image\\";
//実際の名前と保存先を格納
$file_path = $file_dir.$_FILES["uploadfile"]["name"];
//ファイルを移動
if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"],$file_path)){
    
    $image_dir = "/dev/image/";
    $image_path = $image_dir.$_FILES["uploadfile"]["name"];
    $size = getimagesize($file_path);
    
    echo "アップロードが完了しました。"."<br>";
    ?>
    <img src="<?=$image_path?>"<?=$size[3]?>>
    
    <?php
        
}else{
    
    echo "正常にアップロードされていませんでした。";
}
?>
    </body>
</html>



