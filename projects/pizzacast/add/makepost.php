<?php session_start();header('Content-Type: text/html; charset=utf-8');ini_set('display_errors',1);error_reporting(E_ALL);
    
    if (isset($_POST['author'])) { $author=$_POST['author']; if ($author =='') { unset($author);} }
if (isset($_POST['songname'])) { $songname=$_POST['songname']; if ($songname =='') { unset($songname);} }
if (isset($_POST['background'])) { $background=$_POST['background']; if ($background =='') { unset($background);} }

 if ( empty($author) or empty($songname))
    {
    die ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
 $db = mysqli_connect ("localhost","u0935856_default","z6JXDSO!", "u0935856_default");
$uid = 1;
$resultf = mysqli_query($db,"SELECT * FROM `songs` WHERE `name` = '$songname' and `uid` ='$uid'");
  
switch ($background) {
    case 'red':
        $background = 'red';
        break;
    case 'yellow':
        $background = 'yellow';
        break;
    case 'green':
        $background = 'green';
        break;
case 'blue':
        $background = 'blue';
        break;
case 'skyblue':
        $background = 'skyblue';
        break;
case 'pink':
        $background = 'pink';
        break;
}
$file_name = $_FILES["fupload"]["name"];
$filetype = $_FILES["fupload"]["type"];
if ($filetype != "image/jpeg" and $filetype != "image/png"){
    exit('file2type');
}
$file_name = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file_name);
$ext = pathinfo($_FILES['fupload']['name'], PATHINFO_EXTENSION);
$imagename = time() . "." . $ext;
if (move_uploaded_file($_FILES['fupload']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/pizzacast/add/'. $imagename)) {
    echo "Uploaded1";
$songimg = '/pizzacast/add/'. $imagename;
} else {
   echo "File1 was not uploaded";
}
echo $_FILES["mp3"]["type"];
if ($_FILES["mp3"]["type"] != "audio/mpeg"){
exit('fiile2er');
}
$file_name = $_FILES["mp3"]["name"];
$file_name = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file_name);
$ext = pathinfo($_FILES['mp3']['name'], PATHINFO_EXTENSION);
$imagename = time() . "." . $ext;
if (move_uploaded_file($_FILES['mp3']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/pizzacast/add/'. $imagename)) {
    echo "Uploaded2";
$songmp3 = '/pizzacast/add/'. $imagename;
} else {
   echo "File2 was not uploaded";
}
$card = '<a href=""><div class="cart" style="background:#e91e63"><div class="cartimg"><img src="/pizzacast/add/' . time() . '.jpeg"></div><div class="cart_content"><p class="song_name">' . $songname . '</p><p class="song_author">' . $author . '</p></div><div class="center posa"><i class="fa fa-play"></i></div></div></a>';
$db->set_charset("utf8mb4");  
    $result = mysqli_query($db, "INSERT INTO songs(`author`,`name`,`card`,`uid`,`background`,`img`,`mp3`) VALUES ('$author','$songname','$card','$uid','$background','$songimg','$songmp3')");

    if ($result==TRUE)
    {
    echo "Отправлено!";
    }
 else {
    exit("Ошибка!");
    }
    ?>