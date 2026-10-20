<?php
if($_SERVER["REQUEST_METHOD"] !=="POST"){
    header("Location: contact.php");
    exit;
}

$name = $_POST["name"] ?? "";
$companyName = $_POST["companyName"] ?? "";
$email = $_POST["email"] ?? "";
$age = $_POST["age"] ?? "";
$message = $_POST["message"] ?? "";

$body = "名前：{$name}\n会社名：{$companyName}\nメールアドレス：{$email}\n年齢：{$age}\nお問い合わせ内容：{$message}";

$to = $email;
$subject = "お問い合わせありがとうございます";
$result = mail($to, $subject, $body);

if($result){
    $messageText = "お問い合わせが送信されました。ありがとうございます。";
}else{
    $messageText = "送信に失敗しました。もう一度お試しください。";
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム - 送信完了画面</title>
<link rel="stylesheet" href="style.css">
</head>

<body class="send-page">

<h1>お問い合わせフォーム・送信完了画面</h1>

<?php 
echo $messageText; 
?>
<br>
<a href="contact.php">お問い合わせフォームに戻る</a>

</body>
</html>
