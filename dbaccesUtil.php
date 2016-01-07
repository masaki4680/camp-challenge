<?php

//DBへの接続用を行う。成功ならPDOオブジェクトを、失敗なら中断、メッセージの表示を行う
function connect2MySQL(){
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','root','46803980a');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die('接続に失敗しました。次記のエラーにより処理を中断します:'.$e->getMessage());
    }



}


function insert($insert_db,$name,$birthday,$tell,$type,$comment){
	//DBに全項目のある1レコードを登録するSQL

	try{
		//トランザクションを開始
		$insert_db->beginTransaction();
	    //データーの挿入
	$insert_sql = "INSERT INTO user_t(name,birthday,tell,type,comment,newDate)"
			. "VALUES(:name,:birthday,:tell,:type,:comment,:newDate)";

	//クエリとして用意
	$insert_query = $insert_db->prepare($insert_sql);

	//SQL文にセッションから受け取った値＆現在時をバインド
	$insert_query->bindValue(':name',$name);
	$insert_query->bindValue(':birthday',$birthday);
	$insert_query->bindValue(':tell',$tell);
	$insert_query->bindValue(':type',$type);
	$insert_query->bindValue(':comment',$comment);
	$insert_query->bindValue(':newDate',date("Y/m/d H:i:s"));

	//SQLを実行
	$insert_query->execute();

	//トランザクションをコミット
	$insert_db->commit();

	}catch(PDOException $e){
		//エラーが発生して例外が投げられたらロールバックする
		$insert_db->rollback();
		die("データーの挿入に失敗しました:".$e->getMessage());
	}
}