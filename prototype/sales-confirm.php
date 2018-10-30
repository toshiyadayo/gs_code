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
    <title>購入の確定</title>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="script3.js"></script>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/oka.css">
</head>
<body>


<div class="sales-header">
    <p class="sales-header-text">お支払い方法の確定</p>
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

<div class="sales-header">
    <p class="sales-header-text">お支払い方法</p>
</div>
<div >
    <p class="sales-confirm-way">クレジットカード</p>
</div>
<div class="sales-confirm-attention">
    <div>
        <P class="attention">ご注意</p>
    </div>
    <ul class="order-attention2">
        
        <li>お振り込み完了後に出品者の都合でキャンセルになった場合は、
            ご指定の口座に返金いたします。
            （振込手数料は返金できかねますのでご了承ください）</li>
        <li>お振り込み完了後に出品者の都合でキャンセルになった場合は、
        ご指定の口座に返金いたします。
        （振込手数料は返金できかねますのでご了承ください）</li>    
        <li>お振り込み完了後に出品者の都合でキャンセルになった場合は、
            ご指定の口座に返金いたします。
            （振込手数料は返金できかねますのでご了承ください）</li>    
    </ul>
</div>
<div class="profile-button">
    <a href="chat.php"><button class="buy-button">確定する</button></a>
</div>

</body>
</html>