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
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="script3.js"></script>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/oka.css">
</head>
<body>


<div class="sales-header">
    <p class="sales-header-text">お支払い方法の選択</p>
</div>

<div>
    <div class="sales-card">
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
    <div class="sales-price">
        <p class="price3">お支払い金額</p>
        <p class="price4">10分/1,000円</p>
    </div>
</div> 
</div>

<div>
    <div class="sales-header">
        <p class="sales-header-text">お支払い方法</p>
    </div>
    <div class="sales-way">
        <label class="sales-way-button">
            <input type="radio" name="first" value="msg" class="sales-way-radio">クレジットカード
            <textarea id="msg" style="display:none" name="msg"></textarea>
        </label>
        <!-- <label class="radio-inline">
            <input type="radio" name="first" value="redirect">hogehoge
            <input id="redirect" style="display:none" type="text" name="redirect">
        </label> -->
    </div>

    <div class="sales-way">
        <label class="sales-way-button">
            <input type="radio" name="first" value="msg" class="sales-way-radio">携帯キャリア
            
            <textarea id="msg" style="display:none" name="msg"></textarea>
        </label>
        <!-- <label class="radio-inline">
            <input type="radio" name="first" value="redirect">hogehoge
            <input id="redirect" style="display:none" type="text" name="redirect">
        </label> -->
    </div>

    <div class="sales-way">
        <label class="sales-way-button">
            <input type="radio" name="first" value="msg" class="sales-way-radio">コンビニ払い
            <textarea id="msg" style="display:none" name="msg"></textarea>
        </label>
        <!-- <label class="radio-inline">
            <input type="radio" name="first" value="redirect">hogehoge
            <input id="redirect" style="display:none" type="text" name="redirect">
        </label> -->
    </div>

    <div class="sales-way">
        <label class="sales-way-button">
            <input type="radio" name="first" value="msg" class="sales-way-radio">BitCash
            <textarea id="msg" style="display:none" name="msg"></textarea>
        </label>
        <!-- <label class="radio-inline">
            <input type="radio" name="first" value="redirect">hogehoge
            <input id="redirect" style="display:none" type="text" name="redirect">
        </label> -->
    </div>

    <div class="sales-way">
        <label class="sales-way-button">
            <input type="radio" name="first" value="msg" class="sales-way-radio">銀行振込
            <textarea id="msg" style="display:none" name="msg"></textarea>
        </label>
        <!-- <label class="radio-inline">
            <input type="radio" name="first" value="redirect">hogehoge
            <input id="redirect" style="display:none" type="text" name="redirect">
        </label> -->
    </div> 
</div>
<div class="profile-button">
    <a href="sales-confirm.php"><button class="buy-button">確認する</button></a>
</div>    
    <!-- <a href="tools.php" class="btn btn-orange text-center ">購入する</a>     -->
</body>
</html>