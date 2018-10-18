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
            <!-- <p><?=$_SESSION["fname"]?></p>         -->
            <a href="mypage.php"><p><img src="images/test/<?=$_SESSION["fname"]?>"></a>      
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
    



    <section >
                
                
    <section class="card">
        <img class="card-img" src="images/love.jpg" alt="">
        <div class="card-content">
            <h1 class="card-title">Webクリエイターボックス</h1>
            <p class="card-text">WebデザインやWebサイト制作、最新のWeb業界情報などを紹介していくサイト。</p>
        </div>
        <div class="card-link">
            <a href="http://webcreatorbox.com/about">About</a>
            <a href="http://webcreatorbox.com/">Website</a>
        </div>
    </section>

    <div class="card">
        <a href="profile.php"><img class="card-img" src="images/love.jpg"></a>
        <h1>悩んだ時の駆け込み寺</h1>
    </div>

               
               
                

                <!-- <div class="flexbox">
                    <ul style="list-style:none;" class="user-list">
                        <li class="user-item">
                            <a href="profile2.php?id=a">
                            <img src="images/user.jpg" alt="ユーザー" width="120" height="120"/>
                        </li>
                        <li class="user-item">
                                <a href="profile2.php?id=a">
                                <img src="images/user.jpg" alt="ユーザー" width="120" height="120"/>
                        </li>
                        <li class="user-item">
                                <a href="profile2.php?id=a">
                                <img src="images/user.jpg" alt="ユーザー" width="120" height="120"/>
                        </li>
                        <li class="user-item">
                                <a href="profile2.php?id=a">
                                <img src="images/user.jpg" alt="ユーザー" width="120" height="120"/>
                        </li>
                        <li class="user-item">
                                <a href="profile2.php?id=a">
                                <img src="images/user.jpg" alt="ユーザー" width="120" height="120"/>
                        </li>
                        <li class="user-item">
                                <a href="profile2.php?id=a">
                                <img src="images/user.jpg" alt="ユーザー" width="120" height="120"/>
                        </li>
                        <li class="user-item">
                                <a href="profile2.php?id=a">
                                <img src="images/user.jpg" alt="ユーザー" width="120" height="120"/>
                        </li>
                        <li class="user-item">
                                <a href="profile2.php?id=a">
                                <img src="images/user.jpg" alt="ユーザー" width="120" height="120"/>
                        </li>
                    </ul>
                </div> -->
        
                
    </section>
</body>
</html>