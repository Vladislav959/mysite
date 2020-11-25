<?php session_start();header('Content-Type: text/html; charset=utf-8');ini_set('display_errors',1);error_reporting(E_ALL);
    
    if (isset($_POST['text'])) { $text=$_POST['text']; if ($text =='') { unset($text);} }
if (isset($_POST['lang'])) { $lang=$_POST['lang']; if ($lang =='') { unset($lang);} }
if (isset($_POST['makec'])) { $makec=$_POST['makec'];  }if ($makec =='' or empty($makec) or !isset($makec)) { $makec='off';}
if (isset($_POST['vieww'])) { $vieww=$_POST['vieww'];  }if ($vieww =='' or empty($vieww) or !isset($vieww)) { $vieww='off';}
     if (isset($_POST['filename'])) { $filename=$_POST['filename']; if ($filename =='') { unset($filename);} }
 if ( empty($text) or empty($filename))
    {
    die ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
 $db = mysqli_connect ("localhost","u0935856_default","z6JXDSO!", "u0935856_default");
    $idc = mysqli_query($db, "SELECT * FROM `codes` WHERE `id`=(SELECT max(id) FROM `codes`)");
while($row = mysqli_fetch_array($idc)) {
$id = $row['id'];
$fnamedb = $row['filename'];
}
$id = (int) $id;
$id = $id +1;
$_SESSION['id'] = $id;
$uid = $_COOKIE['id'];
$resultf = mysqli_query($db,"SELECT * FROM `codes` WHERE `filename` = '$filename' and `uid` ='$uid'");
  if (mysqli_num_rows($resultf) > 0) {
    exit ('<script>location.href="/profile/add?ex"</script>');
  }
if(strlen($text)>2450){
exit ('<script>location.href="/profile/add?cm"</script>');
}
if(strlen($text)<10){
exit ('<script>location.href="/profile/add?cl"</script>');
}
if(strlen($filename)>30){
exit ('<script>location.href="/profile/add?nm"</script>');
}
$restext = $text;
if($lang!='html'){
$restext = '<p class="nophp">PHP results are not allowed.</p>';
}
    $text = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
$text = str_replace('\n', '&#92;&#110;', $text);
$card = '<form id="form" action="/profile/delete.php" method="post"><input type="hidden" name="codeid" value="' . $id . '"><a href=\"/code?id=' . $id . '\"><div class=\"code\"><p class=\"code_filename\">' . $filename . '</p><input type="submit" value="Edit" formaction="/profile/edit"><input type="submit" value="Delete"></div></a></form>';
$acard = '<a href=\"/code?id=' . $id . '\"><div class=\"code\"><p class=\"code_filename\">' . $filename . '</p></div></a>';
$text = '<h2 class=\"text\">' . $text . '</h2>';
  mysqli_set_charset($db, "utf8mb4"); 
$ulogin = $_COOKIE['login'];
$uname = $_COOKIE['myname'];
$profile = '<p class="profile">Author: <a href="/page?name=' . $_COOKIE['login'] . '">' . $_COOKIE['myname'] . '</a></p>';
$db->set_charset("utf8mb4");  
$ch = curl_init('https://fastycode.site/generate.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "urlid={$id}");
curl_setopt($ch, CURLOPT_HEADER, false);
$url = curl_exec($ch);
    $result = mysqli_query($db, "INSERT INTO codes(`text`,`filename`,`card`,`ulogin`,`uname`,`uid`,`makec`,`vieww`,`acard`,`url`,`lang`,`restext`) VALUES ('$text','$filename','$card','$ulogin','$uname','$uid','$makec','$vieww','$acard','$url','$lang','$restext')");

    if ($result==TRUE)
    {
    echo "Отправлено!";
    }
 else {
    exit("Ошибка!");
    }
$query = mysqli_query($db,"UPDATE `codes` SET `id` = '$id' WHERE `id` = (SELECT * FROM (SELECT max(id) FROM `codes`) AS codes1)");
    if ($query==TRUE)
    {
    echo "Отправленsо!";
echo '<script>location.href="/profile/add?success"</script>';
    }
 else {
    echo "Ошибкsа!";
    }
echo $url;
curl_close($ch);
    ?>