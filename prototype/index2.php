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
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <link rel="stylesheet" href="css/reset.css">
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

            <div class="sp-header-user-img">
            <a href="mypage.php"><img src="images/test/<?=$_SESSION["fname"]?>" width="50" height="50" class="icon2"></a>      
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
                    
    

    <div class="card">
        <div class="service-img"> 
        <a href="profile2.php?id=a"><img src="images/love.jpg"></a>
        </div>

        <div class="service-detail">
            <div>
                <p class="service-title">悩んだ時の駆け込み寺</p>
            </div>
            <div>
                <div class ="service-user-info">
                    <img src="images/user.jpg" class="user-icon">
                    <p class =name>saki</p>
                </div>
            </div>
            <div>
                <div class="box">
                    <p>お悩み</p>
                </div>
                <div class="box">
                    <p>お悩み</p>
                </div>
                <div class="box">
                    <p>お悩み</p>
                </div>
                <div class="box">
                    <p>お悩み</p>
                </div>
                <div class="box">
                    <p>お悩み</p>
                </div>
                <div class="box">
                    <p>お悩み</p>
                </div>
            </div>
        </div>    
        <div class ="service-status">
            <div class="service-price">
                <p class="price">10分/1,000円</p>
            </div>
            <div>
                <div class="service-star">
                    <div>
                        <img src="images/star.jpg" class="star-icon">
                        <img src="images/star.jpg" class="star-icon">
                        <img src="images/star.jpg" class="star-icon">
                        <img src="images/star.jpg" class="star-icon">
                        <img src="images/star.jpg" class="star-icon">
                    </div>
                    <div>
                        <p class="star-count">(55件)</p>
                    </div>
                    <div>
                        <img src="images/heart.jpg" class="heart-icon">
                    </div>    
                    <div>
                        <p class="heart-count">121</p>
                    </div>
                </div>
            </div>
        </div>  
        <div class="balloon1 child"><p>はじめまして！</p>
        </div>   
    </div>

     <div class="card">
        <div class="service-img"> 
        <a href="profile2.php?id=a"><img src="images/love.jpg"></a>
        </div>

        <div class="service-detail">
            <div>
                <p class="service-title">悩んだ時の駆け込み寺</p>
            </div>
            <div>
                <div class ="service-user-info">
                    <img src="images/user.jpg" class="user-icon">
                    <p class =name>saki</p>
                </div>
            </div>
            <div>
                <div class="box">
                    <p>お悩み</p>
                </div>
                <div class="box">
                    <p>お悩み</p>
                </div>
                <div class="box">
                    <p>お悩み</p>
                </div>
                <div class="box">
                    <p>お悩み</p>
                </div>
                <div class="box">
                    <p>お悩み</p>
                </div>
                <div class="box">
                    <p>お悩み</p>
                </div>
            </div>
        </div>    
        <div class ="service-status">
            <div class="service-price">
                <p class="price">10分/1,000円</p>
            </div>
            <div>
                <div class="service-star">
                    <div>
                        <img src="images/star.jpg" class="star-icon">
                        <img src="images/star.jpg" class="star-icon">
                        <img src="images/star.jpg" class="star-icon">
                        <img src="images/star.jpg" class="star-icon">
                        <img src="images/star.jpg" class="star-icon">
                    </div>
                    <div>
                        <p class="star-count">(55件)</p>
                    </div>
                    <div>
                        <img src="images/heart.jpg" class="heart-icon">
                    </div>    
                    <div>
                        <p class="heart-count">121</p>
                    </div>
                </div>
            </div>
        </div>  
        <div class="balloon1 child"><p>はじめまして！</p>
        </div>   
    </div>

     <div class="card">
        <div class="service-img"> 
        <a href="profile2.php?id=a"><img src="images/love.jpg"></a>
        </div>

        <div class="service-detail">
            <div>
                <p class="service-title">悩んだ時の駆け込み寺</p>
            </div>
            <div>
                <div class ="service-user-info">
                    <img src="images/user.jpg" class="user-icon">
                    <p class =name>saki</p>
                </div>
            </div>
            <div>
                <div class="box">
                    <p>お悩み</p>
                </div>
                <div class="box">
                    <p>お悩み</p>
                </div>
                <div class="box">
                    <p>お悩み</p>
                </div>
                <div class="box">
                    <p>お悩み</p>
                </div>
                <div class="box">
                    <p>お悩み</p>
                </div>
                <div class="box">
                    <p>お悩み</p>
                </div>
            </div>
        </div>    
        <div class ="service-status">
            <div class="service-price">
                <p class="price">10分/1,000円</p>
            </div>
            <div>
                <div class="service-star">
                    <div>
                        <img src="images/star.jpg" class="star-icon">
                        <img src="images/star.jpg" class="star-icon">
                        <img src="images/star.jpg" class="star-icon">
                        <img src="images/star.jpg" class="star-icon">
                        <img src="images/star.jpg" class="star-icon">
                    </div>
                    <div>
                        <p class="star-count">(55件)</p>
                    </div>
                    <div>
                        <img src="images/heart.jpg" class="heart-icon">
                    </div>    
                    <div>
                        <p class="heart-count">121</p>
                    </div>
                </div>
            </div>
        </div>  
        <div class="balloon1 child"><p>はじめまして！</p>
        </div>   
    </div>


    
        
    </body>
</html>