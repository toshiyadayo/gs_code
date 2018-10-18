<?php
//最初にSESSIONを開始！！
session_start();

//0.外部ファイル読み込み
include("funcs.php");

//1.  DB接続します
$pdo = db_con();

//2. データ登録SQL作成
$sql ="SELECT * FROM nee_db_table WHERE email=:email AND pass=:pass AND life_flg=0";//IDとPASSWORDで誰が送られてきたか調べる
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':email', $_POST["email"], PDO::PARAM_STR);
$stmt->bindValue(':pass', $_POST["pass"], PDO::PARAM_STR);
$res = $stmt->execute();

//3. SQL実行時にエラーがある場合
if($res==false){
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}

//4. 抽出データ数を取得
//$count = $stmt->fetchColumn(); //SELECT COUNT(*)で使用可能()
$val = $stmt->fetch(); //該当者は一人なので、1レコードだけ取得する方法

//5. 該当レコードがあればSESSIONに値を代入
if( $val["id"] != "" ){
  $_SESSION["chk_ssid"]  = session_id();//セッションIDを、セッションに持たせるログインできたときだけ、値を生成している
  $_SESSION["kanri_flg"] = $val['kanri_flg'];
  $_SESSION["name"]      = $val['name'];
  header("Location: index2.php");
}else{
  //logout処理を経由して全画面へ
  header("Location: login.html");
}

exit();
?>

