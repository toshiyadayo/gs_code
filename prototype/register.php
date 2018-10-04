<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>データ登録</title>
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style> -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/oka.css">
</head>
<body>

<!-- Head[Start] -->
<header class="header" class="sp-header visible-sp">
        <div class="logo-login">
            <div class="header-wrapper" >
                <section class="toplogo">
                    <a href="index.html"><img src="images/icon.jpg" alt="TOP画像"></a>
                </section>
            </div>
            <div class="sp-header-user-nav clearfix">
                <a href="http://localhost/sun/login.html" class="sp-header-btn btn-red">ログイン</a>
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

<!-- Main[Start] -->
<form method="post" action="insert.php" enctype="multipart/form-data">
  <div class="jumbotron　wrapper">
   <center><h3>会員情報のご登録</h3></center>

    <fieldset>
    <label>プロフィール写真：
    
    <input type="file" name="file_upload">
    <input type="submit" value="アップロード">
    </label>

    </fieldset> 

    <br>


    <fieldset>
     <label>メールアドレス：<input type="text" name="email" placeholder="例)neenee@.jp"></label><br>
    </fieldset> 
    <fieldset>
    <label>ユーザー名：<input type="text" name="name" placeholder="例)testA"></label><br>
    </fieldset> 
    <fieldset>
     <label>パスワード：<input type="text" name="pass" placeholder="例)passtest"></label><br>
     </fieldset> 
    <fieldset>
     <label>生年月日：<input type="text" name="birth" placeholder="例)2018/09/27"></label><br>
     </fieldset> 
    <fieldset>
        性別：
        <input type="radio" name="sex" value="0">その他
        <input type="radio" name="sex" value="1">男
        <input type="radio" name="sex" value="2">女
    </fieldset> 
    <br>
    <fieldset>
        タイプ選択
        <select input type="select" name="syurui">
        
            <option value="1" selected>オネエ</option>
            <option value="2">一般人</option>
            <option value="3" >ホステス</option>
            <option value="4">主婦</option>
            <option value="4">女医</option>
            <option value="4">学生</option>
            <option value="4">おっかけ</option>
            <option value="4">スポーツ選手</option>
            <option value="4">その他</option>
        </select>
        
    </fieldset> 
    <br>
    <div class="btn2 text-center">
        <input type="submit" value="登録する"　class="btn text-center">
    </div>
    <br>
    <div>
        <a class="navbar-brand" href="select.php">ユーザ一覧</a></div>
    </div>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
