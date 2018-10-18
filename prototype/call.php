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
    <script type="text/javascript" src="//cdn.webrtc.ecl.ntt.com/skyway-latest.js"></script>
    <script type="text/javascript" src="../key.js"></script>
    <script type="text/javascript" src="script2.js"></script>
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


    <center><h2>トーク画面</h2></center>

   <div class="pure-g">


        <!-- Video area -->
        <div class="pure-u-2-3" id="video-container">
          <div id="their-videos"></div>
          <div>
            <label id="my-label"></label>
            <video id="my-video" muted="true" autoplay playsinline style="width: 100%" ></video>
          </div>
        </div>

      
        <!-- Steps -->
        <div class="pure-u-1-3">

          <!-- <div class="select">
            <label for="audioSource">Audio input source: </label><select id="audioSource"></select>
          </div>
      
          <div class="select">
            <label for="videoSource">Video source: </label><select id="videoSource"></select>
          </div> -->
      
          <!-- Get local audio/video stream -->
          <div id="step1">
            <!-- <p>Please click `allow` on the top of the screen so we can access your webcam and microphone for calls.</p> -->
            <div id="step1-error">
              <!-- <p>Failed to access the webcam and microphone. Make sure to run this demo on an http server and click allow when asked for permission by the browser.</p> -->
              <!-- <a href="#" class="pure-button pure-button-error" id="step1-retry">Try again</a> -->
            </div>
          </div>
      
          <!-- Make calls to others -->
          <div id="step2">
            <form id="make-call" class="pure-form">
              <input type="hidden"  id="join-room">
              <button class="pure-button pure-button-success" type="submit">トークを開始する</button>
            </form>
          </div>
          <!-- <p>Your id: <span id="my-id">...</span></p> -->
      
          <!-- Call in progress -->
          <div id="step3">
            <!-- <p>Currently in room <span id="room-id">...</span></p> -->
            <!-- <p><a href="#" class="pure-button pure-button-error" id="end-call">End call</a></p> -->
          </div>
        </div>
      </div>

      <script>
        var param = location.search.substring(1).split('&'); //文字列を配列に分割する
        // alert(param[0].split('=')[1]);
        
        var val = param[0].split('=')[1]
    //   console.log(getParam('lib'));
        $('#join-room').val(val);
      </script> 
</body>
</html>