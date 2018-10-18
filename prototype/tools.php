<?php
session_start();

include "funcs.php";
chkSsid();
$pdo = db_con();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/oka.css">
    
</head>
<body>
    <header class="header" class="sp-header visible-sp">
    <div class="logo-login">
            <div class="header-wrapper">
                <section class="toplogo">
                    <a href="index2.php"><img src="images/icon.jpg" alt="TOP画像"></a>
                </section>
            </div>
            <div class="sp-header-user-nav">
            <a href="mypage.php"><img src="images/test/<?=$_SESSION["fname"]?>"></a>        
            </div>
            <div>
            <a class="" href="logout.php">ログアウト</a>
            <?=$_SESSION["name"]?>さん、こんにちは！
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
     
    <h3 class="text-center">会話ルーム</h3>        

    <a href="chat.php" class="btn btn-orange text-center ">chatを始める</a><br>
    <a href="call.php" class="btn btn-orange text-center">音声通話を始める</a><br>
    <a href="talk.php?=a" class="btn btn-orange text-center">動画通話を始める</a>

            
            <a href ="detail.php?id=2"></a>


</body>
</html>