<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="style.css">
<script src="style.js" defer></script>
</head>

<body class="contact-page">

<header>
    <h2>お問い合わせフォーム</h2>
</header>

<div class="sidebar">
    <ul>
    <li><a href="#">トップページ</a></li>
    <li><a href="#">人気投稿</a></li>
    <li><a href="#">エンジニアおすすめ商品</a></li>
    <li><a href="#">エンジニアおすすめ記事</a></li>
    <li><a href="#">投稿ページ</a></li>
    <td>
    </ul>
</div>

<td>

<form id="contactForm" action="confirm.php" method="POST">
<table>
<tr>
    <th>お名前</th>
    <td><input type="text" id="name" name="name" size="40"></td>
</tr>
<tr>
    <th>会社名</th>
    <td><input type="text" id="companyName" name="companyName" size="40"></td>
</tr>
<tr>
    <th>メールアドレス</th>
    <td><input type="email" id="email" name="email" size="40"></td>
</tr>
<tr>
<th>年齢</th>
    <td><input type="text" id="age" name="age" size="40"></td>
</tr>
<tr>
    <th>お問い合わせ内容</th>
    <td><textarea name="message" id="message" rows="5" cols="50"></textarea></td>
</tr>
</table>
<input type="submit" value="送信">
</form>

<p>横のボタンを押すとfooterの背景色が変わります。</p>

<footer>
    <button id="footerColorBtn">押してみてね！</button>
</footer>

</body>
</html>
