<?php
$name = $_POST['name'];
$problem = $_POST['problem'];
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
$headers = "From: gubarev
vlad1@yandex.com\r\n";
if($problem == 15){
if (mail("gubarev20084848@gmail.com", "Заявка с сайта", "Имя: ".$name."\nПочта: ".$mail."\nСообщение: ".$message,$headers))
 {     echo "<script>location.href='/?success';</script>";
} else {
    echo "при отправке сообщения возникли ошибки";
}
}
else{
exit("<script>location.href='/?incor'</script>");
}
?>