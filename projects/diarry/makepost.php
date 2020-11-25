<?php header('Content-Type: text/html; charset=utf-8'); ini_set('display_errors',1);
error_reporting(E_ALL);
    if (isset($_POST['title'])) { $title = $_POST['title']; if ($title == '') { unset($title);} } 
    if (isset($_POST['text'])) { $text=$_POST['text']; if ($text =='') { unset($text);} }
if (isset($_POST['date'])) { $date=$_POST['date']; if ($date =='') { unset($date);} }
     
 if (empty($title) or empty($text) or empty($date))
    {
    die ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
 $db = mysqli_connect ("localhost","u0935856_default","z6JXDSO!", "u0935856_default");
    $id = mysqli_query($db, "SELECT 'id' FROM 'diarry'");
    $title = htmlspecialchars_decode($title);
    $text = htmlspecialchars_decode($text);
$day = substr($date,8);
$month = substr($date,5,2);
$year = substr($date,0,4);
$dateall = $day . '.' . $month . '.' . $year;
 $homework ="<div class=\"task animated fadeIn\"><p class=\"task_title\">" . $title . "</p><p class=\"task_info\">" . $text . "</p></div>";
$text = '<p class=\"schedule_text\">' . $text . '</p>';
  mysqli_set_charset($db, "utf8mb4"); 
$db->set_charset("utf8mb4");  
    $result = mysqli_query($db, "INSERT INTO diarry(homework,expires,month,subject,work)VALUES ('$homework','$day','$month','$title','$text')");
    if ($result==TRUE)
    {
    echo "Отправлено!";
    }
 else {
    echo "Ошибка!";
    }
    ?>