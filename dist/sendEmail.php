<?php
// echo "Hello From Sites Folder!";
header("Access-Control-Allow-Origin: *");
header('Content-Type: text/html; charset=utf-8');
// $lang_all = json_decode(file_get_contents("en.json"), true);
// $lang=$lang_all['de'];
// echo $lang_all["hello"];
if($_POST) {
    $to_email = "mq-9@outlook.com";
    $from_email = "polyphenol@tobeplus.com.ua";
    $subject = "Получен новый заказ!";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pieces = $_POST["value"];
    $total_price = $_POST["totalPrice"];
    $body = "<h1>Новый заказ!</h1><h2>Имя: $name</h2><h2>Email: $email</h2><h2>Количество: $pieces</h2><h2>Total price: $total_price</h2>";
    echo('BODY:' . $body);
    if (mail($to_email, $subject, $body, "From: $from_email")) {
       echo("Email successfully sent to $to_email...");
    } else {
       echo("Email sending failed...");
    }
 }
// phpinfo();
?>