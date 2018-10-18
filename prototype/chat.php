<?php
session_start();

include "funcs.php";
chkSsid();
$pdo = db_con();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Chatアプリ</title>
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

<!-- コンテンツ表示画面 -->
<div class="message-content">
    <!-- メッセージ表示部分 -->
    <div id ="output" style="overflow:auto;height:400px;border:1px solid rgb(150, 147, 147);"></div> 
    <input type="hidden" id="username" value="test">    
</div>

<div class="message-content2">
    <!-- テキスト入力 -->
    <div><textarea id="text" class="textarea-default"></textarea> 
    
    <!-- ボタン入力 -->
    <div>
        <button id="send" class="btn">コメントする</button> 
    </div>
</div>



<!--/ コンテンツ表示画面 -->


<!-- 以下JavaScript領域 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- 以下Firebase -->


<script src="https://www.gstatic.com/firebasejs/5.5.2/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAlyknmDWYfk3d3vTafRQH0CVwfuuxRclc",
    authDomain: "chattapp-18a42.firebaseapp.com",
    databaseURL: "https://chattapp-18a42.firebaseio.com",
    projectId: "chattapp-18a42",
    storageBucket: "chattapp-18a42.appspot.com",
    messagingSenderId: "370779077703"
  };
  firebase.initializeApp(config);


    //送信
    let newPostRef = firebase.database().ref(); //リアルタイムに取ってくる

    //名前の登録
    $("#send").on("click",function(){
            console.log($("#username").val(),datedemo(),$("#type").val());
            //送りたい変数名
            newPostRef.push({
            username:$("#username").val(), 
            text:$("#text").val()
        });

        $("#text").val(""); //②中身を空にする
    });

    //受信
    newPostRef.on("child_added",function(data){ //受け取り用の変数「date」
        const v = data.val( ); //設計の問題で、ここにいれる
        const k = data.key;
        let str =""; //let→ここから変数だよ
        str += '<dl>';     //str→文字列 +=→足し算して結果を左辺に入れる
            str += '<dt>' + "相談者："+v.username +'</dt>';
            str += '<dd>' + v.text + '</dd>';
        str += '</dl>';
        $("#output").append(str); 
        $('#output').animate({scrollTop: $('#output')[0].scrollHeight}, 0);
        console.log(v);
    });

　　//エンター操作
    $("#text").on("keydown",function(e){
        if(e.keyCode == 13){
            fire(); //二回同じ処理が出てきたら関数名を使って、functionを呼んであげる
        }
    });

    //エンター操作の中身
    function fire(){     
        newPostRef.push({
            username:$("#username").val(), //usernameからJSで「text」値を取っていれる
            text:$("#text").val()
        });
        $("#text").val("");
    }   //pushする関数

    function datedemo() {
        var today = new Date();
            today.getMinutes();
            today.getFullYear();
            today.getMonth() + 1;
            today.getDate();
            var week = ["日","月","火","水","木","金","土","日"];
            today.getDay(); //中で配列変数で用意する 
            const t = today.getFullYear() + "/" +  today.getMonth() + "/"+ today.getDate()  + "/" + week[today];
            return t;
    }

        

// // if(e.keyCode == 13){
    //         newPostRef.push({
    //         username:$("#username").val(), //usernameからJSで「text」値を取っていれる
    //         text:$("#text").val()
    //     });
    //     $("#text").val("");
    //     }
    // });


</script>












</body>
</html>































