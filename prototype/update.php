<?php
//1. POSTデータ取得
$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$birth = $_POST["birth"];
$syurui = $_POST["syurui"];
// $id = $_POST["file_upload"];

//2. DB接続します
include "funcs.php"; 
$pdo = db_con();


//３．UPDATE
$sql = "UPDATE nee_db_table SET name=:name,email=:email,pass=:pass,birth=:birth,syurui=:syurui WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', $email,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':pass' , $pass, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':birth', $birth,PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT) $stmt->bindValue(':syurui',$syurui,  PDO::PARAM_INT); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':syurui',$syurui,  PDO::PARAM_INT); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id', $id,PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT) $stmt->bindValue(':syurui',$syurui,  PDO::PARAM_INT); //Integer（数値の場合 PDO::PARAM_INT)


$status = $stmt->execute();//executeで実行する

//４．データ登録処理後
if ($status == false) {
    sqlError($stmt);
} else {


//ファイルの保存先
// $upload = 'images/test/'.$_FILES['file_upload']["name"]; 

//アップロードが正しく完了したかチェック
// if(is_uploaded_file($_FILES['file_upload']['tmp_name'])){
//   if(move_uploaded_file($_FILES['file_upload']['tmp_name'], $upload)){
//     echo 'アップロード完了';
//   }else{
//     echo 'アップロード失敗'; 
//   }
// }else{
//   echo "fileがありません";
//   exit;
// }

//５．index.phpへリダイレクト
header("Location: register.php");//phpのheader関数でリダイレクトさせる、成功していたらindexに戻す
exit;
}

?>
