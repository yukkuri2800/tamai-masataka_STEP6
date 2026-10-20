<?php
if($_SERVER["REQUEST_METHOD"] !== "POST"){
    header("Location: contact.php");
    exit;
}

$name = $_POST["name"]?? "";
$company = $_POST["companyName"]?? "";
$email = $_POST["email"]?? "";
$age = $_POST["age"]?? "";
$message = $_POST["message"]?? "";

$errors = [];

if(empty($name)){
    $errors[] = "お名前を入力してください";
}
if(empty($company)){
    $errors[] = "会社名を入力してください";
}
if(empty($email)){
    $errors[] = "メールアドレスを入力してください";
}
if(empty($age)){
    $errors[] = "年齢を入力してください";
}

if(!empty($errors)){
    foreach($errors as $error){
        echo "<p style='color: red;'>$error</p>";
    }
    echo "<p><a href='contact.php'>入力画面に戻る</a></p>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム・確認画面</title>
<link rel="stylesheet" href="style.css">
</head>

<body class="confirm-page">

<header>
    <h2>お問い合わせフォーム・確認画面</h2>
</header>

<div class="sidebar">
    <ul>
        <li><a href="#">トップページ</a></li>
        <li><a href="#">人気投稿</a></li>
        <li><a href="#">エンジニアおすすめ商品</a></li>
        <li><a href="#">エンジニアおすすめ記事</a></li>
        <li><a href="#">投稿ページ</a></li>
    </ul>
</div>

<table>
    <tr><th>お名前</th><td><?= htmlspecialchars($name) ?></td></tr>
    <tr><th>会社名</th><td><?= htmlspecialchars($company) ?></td></tr>
    <tr><th>メールアドレス</th><td><?= htmlspecialchars($email) ?></td></tr>
    <tr><th>年齢</th><td><?= htmlspecialchars($age) ?></td></tr>
    <tr><th>お問い合わせ内容</th><td><?= nl2br(htmlspecialchars($message)) ?></td></tr>
</table>

<form action="send.php" method="POST">
    <input type="hidden" name="name" value="<?= htmlspecialchars($name) ?>">
    <input type="hidden" name="companyName" value="<?= htmlspecialchars($company) ?>">
    <input type="hidden" name="email" value="<?= htmlspecialchars($email) ?>">
    <input type="hidden" name="age" value="<?= htmlspecialchars($age) ?>">
    <input type="hidden" name="message" value="<?= htmlspecialchars($message) ?>">
    <input type="submit" value="送信">
</form>

<button onclick="history.back()">戻る</button>

</body>
</html>


