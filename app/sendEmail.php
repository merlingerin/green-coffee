<?php
// echo "Hello From Sites Folder!";
header("Access-Control-Allow-Origin: *");
header('Content-Type: text/html; charset=utf-8');
// $lang_all = json_decode(file_get_contents("en.json"), true);
// $lang=$lang_all['de'];
// echo $lang_all["hello"];
if($_POST) {
    $to_email = "d.yurevich13@gmail.com";
    $to_email_1 = "alibernatskaya@gmail.com";
    $to_email_2 = "nutrition@tobeplus.com";
    $from_email = "polyphenol@tobeplus.com.ua";
    $subject = "Получен новый заказ!";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pieces = $_POST["value"];
    $total_price = $_POST["totalPrice"];
    $body = "<h1>Новый заказ!</h1><h2>Имя: $name</h2><h2>Email: $email</h2><h2>Количество: $pieces</h2><h2>Total price: $total_price</h2>";
    $message = '<html><body>';
   $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
   $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
   $message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
   $message .= "<tr><td><strong>Items:</strong> </td><td>" . $pieces . "</td></tr>";
   $message .= "<tr><td><strong>Sub-total:</strong> </td><td>" . $total_price . "</td></tr>";
   $message .= "</table>";
   $message .= "</body></html>";
   //  echo('BODY:' . $body);
    if (mail($to_email, $subject, $message, "From: $from_email")) {
         mail($to_email_1, $subject, $message, "From: $from_email");
         mail($to_email_2, $subject, $message, "From: $from_email");
       echo("Email successfully sent");
    } else {
       echo("Email sending failed...");
    }
 }
// phpinfo();

?>