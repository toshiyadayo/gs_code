<?php
// 1.  DB接続します

include "funcs.php"; 
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM nee_db_table");
$status = $stmt->execute();//実行

//３．データ表示
$view="";//ここで宣言する
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("SQL_ERROR:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    // $view .= "<tr>"."<td>".$result["name"]."</td>"."<td>".$result["email"]."</td>"."<td>".$result["pass"]."</td>"."<td>".$result["birth"]."</td>"."<td>".$result["sex"]."</td>"."<td>".$result["syurui"]."</td>"."</tr>";//<br>で改行する
    $view .= "<P>";
    $view .= '<a href="u_view.php?id='.$result["id"].'">';
    $view .= $result["name"].":".$result["email"].":".$result["pass"];
    $view .= '</a>';
    $view .= "</P>";
    }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>ユーザー情報一覧</title>
<!-- <link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style> -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/oka.css">
</head>
<body id="main">


<!-- Head[Start] -->
<header class="header" class="sp-header visible-sp">
        <div class="logo-login">
            <div class="header-wrapper" >
                <section class="toplogo">
                    <a href="index.html"><img src="images/icon.jpg" alt="TOP画像"></a>
                </section>
            </div>
            <div class="sp-header-user-nav clearfix">
            <a href="http://localhost/prototype/login.html" class="sp-header-btn btn-red">ログイン</a>
            </div>
        </div>


        <nav class="sp-header-nav">
            <ul class="globalNav">
                <li class="current">
                    <a href="index.html">
                        <strong>いま話せる</strong>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <strong>人気者 </strong>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <strong>最新</strong>
                    </a>
                </li>
                <li>
                        <a href="index.html">
                            <strong>恋愛系</strong>
                        </a>
                    </li>
                    <li>
                            <a href="index.html">
                                <strong>人間関係</strong>
                            </a>
                        </li>
                        <li>
                                <a href="index.html">
                                    <strong>家族系</strong>
                                </a>
                            </li>
            </ul>

        </nav>
    </header>
<!-- Head[End] -->

<!-- Main[Start] （GETで取ってきている）-->
<form method="GET" action=""> 
    <input type ="text" name="email">
    
    <div class="container jumbotron">
    <table border="solid" margin="5px">
    <tr>
        <th>名前</th>
        <th>Email</th>
        <th>パスワード</th>
        <th>誕生日</th>
        <th>性別</th>
        <th>種類</th>
    </tr>        
        <?=$view?>
    </table>
    </div>
</form>

<a class="navbar-brand" href="register.php">登録ページ</a>
<!-- Main[End] -->


</body>
</html>
