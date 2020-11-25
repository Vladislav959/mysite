<?php
$name = $_POST['name'];
$message = $_POST['message'];
$mail = $_POST['mail'];
$name = htmlspecialchars($name);
$message = htmlspecialchars($message);
$mail = htmlspecialchars($mail);
$name = urldecode($name);
$mail = urldecode($mail);
$message = urldecode($message);
$name = trim($name);
$mail = trim($mail);
$message = trim($message);
$headers = "From: my@yandex.ru\r\n";
if (mail("gubarev20084848@gmail.com", "Заявка с сайта", "Имя: ".$name."\nПочта: ".$mail."\nСообщение: ".$message,$headers))
 {     echo "<script>location.href='https://gubarev.site/arch';</script>";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>