<?php
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
if (isset($_POST['subject'])) { $subject = $_POST['subject']; if ($subject == '') { unset($subject);} } 
if (isset($_POST['role'])) { $role = $_POST['role']; if ($role == '') { unset($role);} } 
if (isset($_POST['code'])) { $code = $_POST['code']; if ($code == '') { unset($code);} } 
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (isset($_POST['myname'])) { $myname = $_POST['myname']; if ($myname == '') { unset($myname);} } 
if (empty($login) or empty($password) or empty($myname)) 
{
exit ("Вы ввели не всю информацию, венитесь назад и заполните все поля!");
}
$login = stripslashes($login);
$login = htmlspecialchars($login);
$myname = stripslashes($myname);
$myname = htmlspecialchars($myname);
$password = stripslashes($password);
$password = htmlspecialchars($password);
$code = stripslashes($code);
$code = htmlspecialchars($code);
$login = trim($login);
$password = trim($password);
$myname = trim($myname);
$code =trim($code);
if    (strlen($login) < 3 or strlen($login) > 15) {
            exit    ("Логин должен состоять не менее чем из 3 символов и не более чем из    15.");
            }
            if    (strlen($password) < 3 or strlen($password) > 15) {
            exit    ("Пароль должен состоять не менее чем из 3 символов и не более чем из    15.");
            }          
           

            $fupload=$_FILES['fupload'];
if    (!isset($fupload) or empty($fupload) or $fupload =='')
            {
            $avatar    = "/diarry/sign/avatars/no-avatar.png";
            }          
else 
            {   

            if(preg_match('/[.](JPG)|(jpg)|(png)|(PNG)$/',$_FILES['fupload']['name']))
                      {                 
$filename =    $_FILES['fupload']['name'];
                               $source = $_FILES['fupload']['tmp_name'];if(preg_match('/[.](PNG)|(png)$/', $filename)) {
$newfile=time() . ".png"; 
}

if(preg_match('/[.](JPG)|(jpg)|(jpeg)|(JPEG)$/', $filename)) {
$newfile=time() . ".jpg"; 
} 

$target = $_SERVER['DOCUMENT_ROOT'] . '/diarry/sign/avatars/'.$newfile;
move_uploaded_file($source,$target) ;

$avatar = '/diarry/sign/avatars/'.$newfile;
             }

 }if($avatar==''){
echo '';}
include ("bd.php");
if($role=='teacher'){
if($code!=15){
die('неправильный код');
}}
$result = mysqli_query($db,"SELECT `id` FROM `users` WHERE `login`='$login'");
$myrow = mysqli_fetch_array($result);
if (!empty($myrow['id'])) {
exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
}
mysqli_set_charset($db, "utf8mb4"); 
$db->set_charset("utf8mb4");  
$result2 = mysqli_query ($db,"INSERT INTO `users` (`login`,`password`, `myname`, `role`, `subject`,`avatar`) VALUES('$login','$password','$myname', '$role','$subject','$avatar')");

if ($result2=='TRUE')
{
$login = $myrow['login'];
$role = $myrow['role'];
$myname=$myrow['myname'];
$id=$myrow['id'];
$subject=$myrow['subject'];
$avatar=$myrow['avatar'];
          setcookie('login', $login, time()+60*60*24*30, "/");
setcookie('myname', $myname, time()+60*60*24*30, "/");
setcookie('password', $password, time()+60*60*24*30, "/");
setcookie('role', $role, time()+60*60*24*30, "/");
setcookie('id', $id, time()+60*60*24*30, "/");
          setcookie('subject', $subject, time()+60*60*24*30, "/");
setcookie('avatar', $avatar, time()+60*60*24*30, "/");
}

else {
echo "Ошибка! Вы не зарегистрированы.";
     }
echo '<script>location.href="/diarry/profile/";</script>';
?>