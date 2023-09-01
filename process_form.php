<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "0226.reon@gmail.com"; // 管理者のメールアドレスを指定
    $subject = "お問い合わせがありました";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    echo "お問い合わせありがとうございます。";
} else {
    echo "このページには直接アクセスしないでください。";
}
?>
