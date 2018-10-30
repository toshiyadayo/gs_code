
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
     

    <div class="profile-header">
        <img src="images/bts.jpg" alt="プロフィールヘッダー画像"class="profile-header-img" >
    </div>
    <div>
            
        <div class="profile-img"> 
            <img src="images/user.jpg" class="profile-icon">
        </div>
        <div class="profile-detail">
            <div class ="profile-user-info">
                    <p class =name2>saki</p>
            </div>
            <div class="service-star2">
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
        <div class="balloon1 child">
            <p>はじめまして！</p>
        </div>
        <div>
            <p class="profile-title">悩んだ時の駆け込み寺</p>
        </div>
        <div class="tab">
            <div class="box">
                <p>MTF</p>
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
        <div class="profile-text">
            <p>おはこんばんちわ！遅刻ギリギリでもう
                    大変！前髪パーラーをつけながら外に出ち
                    ゃった22歳大学生のサキです。<br>

                    こんなドジな私ですが、過去にはめっちゃ
                    メンヘラでした。でも、今は何とか人生
                    エンジョイ勢で頑張って呼吸してます。
                    嫌な事の特効薬は、人と話すこととお酒だ
                    なと思いました。人生悩んだら是非こんな
                    私とお話してみましょう！<br>

                    Let’s everyday 酒クズ<br>

                    最近の癒しは韓流見ながら長風呂すること
                    です。風呂場だから泣いてもオッケーだね！<br>
                    あはは
            </p>
        </div>
        <div class="profile-price">
                <p class="price2">10分/1,000円</p>
        </div>
        <div class="profile-button">
            <a href="sales.php"><button class="buy-button">購入画面にすすむ</button></a>
        </div>
    </div>

</body>
</html>