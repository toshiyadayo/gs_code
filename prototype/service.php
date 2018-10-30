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


<div class="service-header">
    <p>サービス出品</p>
</div>


<form method="post" action="insert.php" enctype="multipart/form-data">

    <div class="service-form">
        <h3 class=service-text>タイトル</h3>
        <textarea name="title" cols="25" rows="1" class="waku" placeholder="例文) :悩んだ時の駆け込み寺"></textarea>     
        </form>
    </div> 

    <div >
        <h3 class=service-text>イメージ画像(最大3枚)</h3>
        <input type="file" name="file_upload">
        <input type="submit" value="アップロード">
    </div> 

    

    <div class="service-form">
        <h3 class=service-text>自己紹介・説明文</h3>
        <textarea name="introduce" cols="25" rows="4" class="waku" placeholder="例文）：はじめまして！"></textarea>     
        </form>
    </div> 

    <div class="service-form">
        <h3 class=service-text>キーワード</h3>
        <textarea name="keyword" cols="25" rows="1" class="waku" placeholder="キーワード登録"></textarea>     
        </form>
    </div>  

    <div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<style type="text/css">
/*CSS*/
#tagList{
width: 300px;
padding: 5px;
background: blue;

}
#tagList>div{
display: inline-block;
margin: 0 10px 5px 0;
padding: 5px;
background: #ccc;
}
</style>
    <!-- 追加用 -->
    <input type="text" name="addTag" minlength='1' maxlength='12'>

    <!-- 表示用 -->
    <div id="tagList">
    <!-- <div>a</div>
    <div>b</div> -->
    <!-- <div>c</div>x -->
    </div>

    <!-- tagList→何が入っている？
    aとbが入っています -->


    <!-- 送信用 -->
    <!-- <input type="hidden" name="tagSendList" value=""> -->
    <input type="text" name="tagSendList" value="">
    <!-- a,b,c -->
    <!-- tagSendList = aとbが入っています -->



    <script type="text/javascript">
    // エンター押した時の処理
    let tagGroup = "";
    let tagCount = 0;
    let tagGroupTxt = "";
    $('input[name="addTag"]').on("keydown",function(e){
    if(e.keyCode == 13){





    // console.log($('#tagList>div').length);

    if (tagCount<5) {

    let addOneTab = $('input[name="addTag"]').val();

    if(addOneTab!=""){

    // #tagListに取得したaddOneTabを追加していく
    //消去ボタンの作り方→→→これのtagdeleteを、親要素に当てる
    $("#tagList").append("<div class='tagDelete'>"+addOneTab+"</div>")

    // tagSendListにDBに送信する内容を格納
    // tagGroup = tagGroup+""+addOneTab+",";
    // $('input[name="tagSendList"]').val(tagGroup);


    // *************
    // tagGroupTxt = "";
    // tagGroup = $('#tagList').find("div");
    // for (var i = 0; i < tagGroup.length; i++) {
    // console.log(tagGroup[i].textContent);
    // tagGroupTxt = tagGroupTxt+""+tagGroup[i].textContent+",";
    // $('input[name="tagSendList"]').val(tagGroupTxt);
    // }
    tagUpdate();
    // ***********
    // tagGroup[0].textContent;
    // console.log(tagGroup[1].textContent);



    //入力欄をから空にする
    $('input[name="addTag"]').val("");

    tagCount = $('#tagList>div').length;
    // console.log(tagCount);

    }
    }

    }
    });



    $("#tagList").on("click",'div',function(){
    //$(this)でクリックしたdivを削除
    $(this).remove();
    tagUpdate();
    tagCount = $('#tagList>div').length;
    });



    function tagUpdate(){
    tagGroupTxt = "";
    tagGroup = $('#tagList').find("div");
    for (var i = 0; i < tagGroup.length; i++) {
    console.log(tagGroup[i].textContent);
    tagGroupTxt = tagGroupTxt+""+tagGroup[i].textContent+",";
    // $('input[name="tagSendList"]').val(tagGroupTxt);
    }
    $('input[name="tagSendList"]').val(tagGroupTxt);
    }


    // ToDo:
    // 1)文字で威厳done
    // 2)個数制限done
    // 3)消すボタンdone
    // 4)０文字の時は送信させないdone


    </script>

    </div>

    <div class="service-form">
        <h3 class=service-text>価格</h3>
        <textarea name="price" cols="25" rows="1" class="waku" placeholder="〇〇〇円"></textarea>     
        </form>
    </div> 

    <div >
        <h3 class=service-text>カバー写真</h3>
        <input type="file" name="file_upload">
        <input type="submit" value="アップロード">
    </div> 

<div class="service-button">
    <a href="index2.php"><button type="submit" class="service-button2">出品する</button></a>
</div>

</form> 

</body>
</html>
