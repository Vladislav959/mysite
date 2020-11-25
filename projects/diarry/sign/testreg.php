<?php

if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную

if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
exit ("Вы ввели не всю информацию, венитесь назад и заполните все поля!");
}
//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);

//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);


// подключаемся к базе
include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 


mysqli_set_charset($db, "utf8mb4"); 
$db->set_charset("utf8mb4");  
$result = mysqli_query($db, "SELECT * FROM `users` WHERE `login`='$login'"); //извлекаем из базы все данные о пользователе с введенным логином
$myrow = mysqli_fetch_array($result);
if (empty($myrow['password']))
{
//если пользователя с введенным логином не существует
exit ("Извините, введённый вами логин или пароль неверный.");
}
else {
//если существует, то сверяем пароли
          if ($myrow['password']==$password) {
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
       //если пароли не сошлись
       exit ("Извините, введённый вами логин или пароль неверный.");
	   }
}
echo '<script>location.href="/diarry/profile/";</script>';
?>