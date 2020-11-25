<?php
$db = mysqli_connect ("localhost","u0935856_default","z6JXDSO!", "u0935856_default");
$mail = $_COOKIE['email'];
$uid = $_COOKIE['id'];
    $query = mysqli_query($db, "DELETE FROM `fusers` WHERE `email`='$mail'");
$query2 = mysqli_query($db, "DELETE FROM `codes` WHERE `uid`='$uid'");
setcookie('email', '', time() -3600, "/");
setcookie('login', '', time() -3600, "/");
setcookie('myname', '', time() -3600, "/");
setcookie('id', '', time() -3600, "/");
setcookie('avatar', '', time() -3600, "/");
?>
<script>location.href="/"</script>