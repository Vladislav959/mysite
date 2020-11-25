<?php header('Content-Type: text/html; charset=utf-8');ini_set('display_errors',1);error_reporting(E_ALL);
    if (isset($_POST['text'])) { $text=$_POST['text']; if ($text =='') { unset($text);} }
if (isset($_POST['lang'])) { $lang=$_POST['lang']; if ($lang =='') { unset($lang);} }
if (isset($_POST['filename'])) { $filename=$_POST['filename']; if ($filename =='') { unset($filename);} }
     $id = $_POST['codeid'];
if (isset($_POST['makec'])) { $makec=$_POST['makec'];  }if ($makec =='' or empty($makec) or !isset($makec)) { $makec='off';}
if (isset($_POST['vieww'])) { $vieww=$_POST['vieww'];  }if ($vieww =='' or empty($vieww) or !isset($vieww)) { $vieww='off';}
 if (empty($text) or empty($filename))
    {
    die ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
$db = mysqli_connect ("localhost","u0935856_default","z6JXDSO!", "u0935856_default");
  mysqli_set_charset($db, "utf8mb4"); 
$db->set_charset("utf8mb4");  
$isillegal = mysqli_query($db, "SELECT * FROM `codes` WHERE `id`=$id");
while($row = mysqli_fetch_array($isillegal)) {
$uid = $row['uid'];
$makec = $row['makec'];
$downlink = $row['downlink'];
}
if($_COOKIE['id']!=$uid){
exit('illegal');
}
if($_COOKIE['id']!=$uid and $makec!='on'){
exit('illegal');
}
if($lang=='html'){
if(strpos($restext, '<?') !== false){
$restext = '<p class="nophp">PHP results are not allowed.</p>';
}
else{
$restext = $text;
}
}
$text = htmlspecialchars($text);
$card = '<form id="form" action="/profile/delete.php" method="post"><input type="hidden" name="codeid" value="' . $id . '"><a href=\"/code?id=' . $id . '\"><div class=\"code\"><p class=\"code_filename\">' . $filename . '</p><input type="submit" value="Edit" formaction="/profile/edit"><input type="submit" value="Delete"></div></a></form>';
$acard = '<a href=\"/code?id=' . $id . '\"><div class=\"code\"><p class=\"code_filename\">' . $filename . '</p></div></a>';
$text = '<h2 class=\"text\">' . $text . '</h2>';
    $result = mysqli_query($db, "UPDATE `codes` SET `text`='$text', `filename`='$filename', `restext`='$restext',`lang`='$lang',`makec`='$makec',`vieww`='$vieww',`card`='$card',`acard`='$acard' WHERE `id`='$id'");
 
    if ($result==TRUE)
    {
    echo "Отправлено!";
    }
 else {
    echo "Ошибка!";
    }
    ?>