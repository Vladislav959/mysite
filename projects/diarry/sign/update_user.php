<?php ini_set('display_errors', 1);ini_set('display_startup_errors', 1);error_reporting(E_ALL);
          include ("bd.php");
if (!empty($_COOKIE['login']) and !empty($_COOKIE['password']))
            {
       
            $login = $_COOKIE['login'];
            $password = $_COOKIE['password'];
            $result2 = mysqli_query($db,"SELECT `id` FROM `users` WHERE `login`='$login' AND `password`='$password'"); 
            $myrow2 = mysqli_fetch_array($result2); 
            if (empty($myrow2['id']))
               {
               //Если не    действительны, то закрываем доступ
                exit("Вход на эту страницу разрешен    только зарегистрированным пользователям!");
               }
            }
            else {
            //Проверяем,    зарегистрирован ли вошедший
            exit("Вход на эту страницу разрешен только зарегистрированным пользователям!"); }
$old_login =    $_COOKIE['login']; //Старый логин нам    пригодиться
            $id = $_COOKIE['id'];//идентификатор пользователя тоже нужен
            $ava =    "/diarry/sign/avatars/no-avatar.png";
if (isset($_POST['login']))//Если существует логин
                  {
            $login = $_POST['login'];
            $login = stripslashes($login); $login =    htmlspecialchars($login); $login = trim($login);//удаляем все лишнее 
            if ($login == '') {    exit("Вы не ввели логин");} //Если    логин пустой, то останавливаем 
if (strlen($login) < 3 or strlen($login)    > 15) {//проверяем    дину 
            exit ("Логин должен    состоять не менее чем из 3 символов и не более чем из 15."); //останавливаем выполнение сценариев

            }
//    проверка на существование пользователя с таким же логином
            $result = mysqli_query($db,"SELECT `id` FROM    `users` WHERE `login`='$login'");
            $myrow = mysqli_fetch_array($result);
            if (!empty($myrow['id']) and $_COOKIE['login']!=$login) {
            exit ("Извините,    введённый вами логин уже зарегистрирован. Введите другой логин."); //останавливаем выполнение сценариев

            }
$result4 = mysqli_query($db,"UPDATE `users` SET    `login`='$login' WHERE `login`='$old_login'");//обновляем в базе логин пользователя 

            if ($result4=='TRUE') {
            
            $_COOKIE['login'] = $login;
            echo "нормас логин";}
      } 
else if    (isset($_POST['password'])) 
                  {
            $password = $_POST['password'];
            $password = stripslashes($password);$password    = htmlspecialchars($password);$password = trim($password);
            if ($password == '') {    exit("Вы не ввели пароль");} 
if (strlen($password) < 3    or strlen($password) > 15) {//проверка на    количество символов
            exit ("Пароль должен    состоять не менее чем из 3 символов и не более чем из 15.");
            }

           
 
$result4 = mysqli_query($db,"UPDATE `users` SET    `password`='$password' WHERE `login`='$old_login'");

            if ($result4=='TRUE') {
            $_COOKIE['password'] = $password;
            echo "норм пароль";}
                 } 
           
            else if    (isset($_FILES['fupload']['name'])) //отправлялась    ли переменная
                  {
if (empty($_FILES['fupload']['name']))
            {
            //если    переменная пустая (пользователь не отправил изображение),то присваиваем ему    заранее приготовленную картинку с надписью "нет аватара"
            $avatar =    "/diarry/sign/avatars/no-avatar.png"; 
            $result7 = mysqli_query($db,"SELECT `avatar`    FROM `users` WHERE `login`='$old_login'");//извлекаем текущий аватар 
            $myrow7 = mysqli_fetch_array($result7);
            if ($myrow7['avatar'] == $ava)    {//если аватар был стандартный, то не удаляем    его, ведь у на одна картинка на всех.
            $ava = 1;
            }
            else {unlink    ($myrow7['avatar']);}//если аватар был свой, то    удаляем его, затем поставим стандарт
            }
else 
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
echo $avatar;
             }
echo $avatar;
            $myrow7 = mysqli_fetch_array($result7);
if ($myrow7['avatar'] == $ava)    {//если он стандартный, то не удаляем его, ведь у    нас одна картинка на всех.
            $ava = 1;
            
            else {unlink    ($myrow7['avatar']);}//если аватар был свой, то    удаляем его
 
}echo $avatar;}
            else 
                    {
                                          //в    случае несоответствия формата, выдаем соответствующее сообщение

                    exit ("Аватар должен быть в    формате <strong>JPG,GIF или PNG</strong>");

                                          }

$result4 = mysqli_query($db,"UPDATE `users` SET    `avatar`='$avatar' WHERE `login`='$old_login'");//обновляем аватар в базе 

            if ($result4=='TRUE') {//если верно, то отправляем на личную страничку
            echo "норм ава";}
      
            ?>