<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="content">
    <h1>AsoSystem</h1>
    <div class="control">
        <label for="login"><p>メールアドレス</p></label>
        <form action="login-out.php" method="post">
            <input type="text" name="mail" id="login">
    </div>
    <div class="control">
        <label for="login"><p>パスワード</p></label>
        <input type="password" name="pass" id="login"required>
    </div>
    <p><button type="submit" id="action" value="認証">認証</button></p>
    </form>
</div>
<a href="toppage.php">トップページに戻る</a><br>
</body>
</html>
