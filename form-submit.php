<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "0226.reon@gmail.com"; // 管理者のメールアドレス
    $subject = "お問い合わせフォームからのメッセージ";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // お問い合わせが送信された後、ユーザーを別のページにリダイレクトするなどの追加処理を行うことができます。
    header("Location: thank-you.html");
    exit;
}
?>
