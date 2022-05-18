<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>退会</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Russo+One&display=swap">
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/withdraw.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
<div class="container">
 <div class="icon"><img src="img/本アイコン.png" width="75" height="75"></div>
  <div class="title" >comic store</div><br>
    <div class="content">
    <p>退会される場合は、下記の項目を入力してください</p><br>
    </div>
        <div class="txt_in">
        <form action="withdraw-result.php" method="post">
         <span class="mail"><p>メールアドレス</p></span><br>
            <label class="ef">
             <input class="box" type="text" name="mail">
            </label>
            <br>
            <br>
         <span class="pass"><p>パスワード</p></span><br>
            <label class="ef">
             <input class="box" type="text" name="pass">
            </label>
            <br>
            <br>
        </div>
     <div class="btn"><p><button type="submit" id="btn">送信</button></p></div>
     <br>
     <br>
     </form>
    </div>
</div>
</body>
</html>
