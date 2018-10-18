<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$name  = $_POST["name"];
$email = $_POST["email"];
$pass  = $_POST["pass"];
$birth = $_POST["birth"];
$sex   = $_POST["sex"];
$syurui   = $_POST["syurui"];
$fname   = $_FILES['file_upload']["name"]; 
var_dump("aaaa");
var_dump($name);



//2. DB接続します
try {
  $pdo = new PDO('mysql:dbname=nee_db;charset=utf8;host=localhost','root','');//DB接続(アドレス、ID、pass)
} catch (PDOException $e) {
  exit('DB_CONECTION_ERROR:'.$e->getMessage());//エラーが出た時の文言
}


//３．データ登録SQL作成
$sql="INSERT INTO nee_db_table(name,email,pass,birth,sex,syurui,fname)VALUES(:name,:email,:pass,:birth,:sex,:syurui,:fname)";

$stmt = $pdo->prepare($sql);//sqlをつくってprepareに預ける

$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', $email,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':pass' , $pass, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':birth', $birth,PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':sex' , $sex,  PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':syurui',$syurui,  PDO::PARAM_INT); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':fname',$fname, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)


$status = $stmt->execute();//executeで実行する

//４．データ登録処理後
if($status==false){
  sqlError($stmt);
}else{

//５．register.phpへリダイレクト


//ファイルの保存先
$upload = 'images/test/'.$_FILES['file_upload']["name"]; 

//アップロードが正しく完了したかチェック
if(is_uploaded_file($_FILES['file_upload']['tmp_name'])){
  if(move_uploaded_file($_FILES['file_upload']['tmp_name'], $upload)){
    echo 'アップロード完了';
  }else{
    echo 'アップロード失敗'; 
  }
}else{
  echo "fileがありません";
  exit;
}

header("Location: index2.php");//phpのheader関数でリダイレクトさせる、成功していたらindexに戻す
exit;
}

?>
