<?php
if(isset($_COOKIE['login'])){
$src="profile";
$vis="Профиль";
}
else{
$src="sign";
$vis="Вход";
}
$role = $_COOKIE['role'];
$panela='';
if($role=='teacher')
{
$panela = '<a class="mdl-navigation__link" href="/diarry/create/">Панель</a>';
}
else if($role=='admin'){
$panela = '<a class="mdl-navigation__link" href="/diarry/makeindex.php">Панель</a>';
}
if(isset($_COOKIE['myname'])){
$name = ',&nbsp;' . $_COOKIE['myname'] . '.';
}
else{
$name = '.';
}
?>
<!doctype html>
<html lang="ru">
<head>
<script>
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register("/diarry/sw.js");
}
</script>
<meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-title" content="Diarry" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
<meta name="description" content="Diarry - удобный сервис для просмотра домашнего задания в 2020 году.">
<meta property="og:image" content="https://gubarev.site/diarry/logo.png">
<meta name="author" content="Diarry">
<meta name="keywords" content="электронный дневник, дневник, дз, дневник дз, дз дневник, узнать дз, школа, дневник мос ру">
  <link rel="canonical" href="https://gubarev.site/diarry/">
<link rel="icon" type="image/png" href="/diarry/logo.png" />
<link rel="shortcut icon" type="image/png" href="/diarry/logo.png" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="/animate.css?v=<?=filemtime($_SERVER["DOCUMENT_ROOT"]."/animate.css")?>">
<link rel="stylesheet" href="/app.css?v=<?=filemtime($_SERVER["DOCUMENT_ROOT"]."/app.css")?>">
<script defer src="/app.js?v=<?=filemtime($_SERVER["DOCUMENT_ROOT"]."/app.js")?>"></script>       
<title>Diarry - удобное домашнее задание</title>
<meta name="theme-color" content="#00eea3">
<link rel="manifest" href="/diarry/manifest.json">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<style>
@font-face {
  font-family: 'Oblivion';
  src: url('/diarry/obl-bold.otf');
}
@font-face {
  font-family: 'Ubuntu';
  src: url('/diarry/ubuntu.ttf');
}
h1,h2,h3{
font-family:'Oblivion';}
body{
font-family:'Ubuntu';
font-size:1.3em;
}
h1 span{
color:#00eea3;
}
.task{
width:89vw;
padding:1vw;
}
.task_title{
font-size:1.4em;
padding-top:-20px
}
.mylogo_div{
width:50px;
height:50px;
}
.mylogo{
width:50px;
height:50px;
}
::selection{
background-color:#00eea3;
}
hr{
background-color:#00eea3;
height:2px;
border:none;
}
.day_p{
padding-top:20px;
font-size:1.55em
}
.share_btn{
background-color:#00eea3;
box-shadow:none;
}
.share_btn:focus{
box-shadow:none;
}
</style>
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
  <header class="mdl-layout__header animated fadeIn">
    <div class="mdl-layout__header-row"> 
      <div class="mdl-layout-spacer"></div>      
        <div class="mylogo_div mdl-button mdl-js-button mdl-button--icon">
          <img alt="Логотип" class="mylogo" src="/diarry/logom.png">
        </div>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title httd">Меню</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="/diarry/">Главная</a>
      <a class="mdl-navigation__link" href="/diarry/about/">Что это такое?</a>
<a class="mdl-navigation__link" href="/diarry/<?php echo $src;?>/"><?php echo $vis;?></a>
<?php echo $panela;?>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
<h1 class="animated fadeIn">Dia<span>rr</span>y</h1>
<p class="welcome"></p>
	<script>
var hour = new Date().getHours();
if (hour >= 4 && hour < 12){
document.querySelector(".welcome").innerHTML="Good morning!";
}

else if (hour >= 12 && hour < 17){
document.querySelector(".welcome").innerHTML="Have a good day!";
}

else if (hour >= 17 && hour < 22){
document.querySelector(".welcome").innerHTML="Good evening!";
}

else if (hour >= 22 && hour <=24){
document.querySelector(".welcome").innerHTML="Good night!";
}

else if (hour >= 0 && hour <4){
document.querySelector(".welcome").innerHTML="Good night!";
}
</script>

<?php   
$db = mysqli_connect ("localhost","u0935856_default","z6JXDSO!", "u0935856_default");
mysqli_set_charset($db, "utf8") ; /* Procedural approach */
$day = date('d');
$month = date('m');
$delm = mysqli_query($db,"DELETE FROM `diarry` WHERE `month` < $month");
$delexp = mysqli_query($db,"DELETE FROM `diarry` WHERE `expires` <= $day AND `month` = $month");
$nextmon = date('d', strtotime('next Monday'));
$nexttue = date('d', strtotime('next Tuesday'));
$nextwed = date('d', strtotime('next Wednesday'));
$nextthu = date('d', strtotime('next Thursday'));
$nextfri = date('d', strtotime('next Friday'));
$snextmon = date('d', strtotime('next Monday +7 days'));
$snexttue = date('d', strtotime('next Tuesday +7 days'));
$snextwed = date('d', strtotime('next Wednesday +7 days'));
$snextthu = date('d', strtotime('next Thursday +7 days'));
$snextfri = date('d', strtotime('next Friday +7 days'));
$mon = mysqli_query($db,"SELECT * FROM `diarry` WHERE `expires`='$nextmon'");
$tue = mysqli_query($db,"SELECT * FROM `diarry` WHERE `expires`='$nexttue'");
$wed = mysqli_query($db,"SELECT * FROM `diarry` WHERE `expires`='$nextwed'");
$thu = mysqli_query($db,"SELECT * FROM `diarry` WHERE `expires`='$nextthu'");
$fri = mysqli_query($db,"SELECT * FROM `diarry` WHERE `expires`='$nextfri'");
$smon = mysqli_query($db,"SELECT * FROM `diarry` WHERE `expires`='$snextmon'");
$stue = mysqli_query($db,"SELECT * FROM `diarry` WHERE `expires`='$snexttue'");
$swed = mysqli_query($db,"SELECT * FROM `diarry` WHERE `expires`='$snextwed'");
$sthu = mysqli_query($db,"SELECT * FROM `diarry` WHERE `expires`='$snextthu'");
$sfri = mysqli_query($db,"SELECT * FROM `diarry` WHERE `expires`='$snextfri'");
if(mysqli_num_rows($mon)!=0){
echo '<p class="day_p animated fadeIn">Понедельник</p><hr class="animated fadeIn">';
while($row = mysqli_fetch_array($mon)) {
echo $row['homework'];
}
}
if(mysqli_num_rows($tue)!=0){
echo '<p class="day_p animated fadeIn">Вторник</p><hr class="animated fadeIn">';
while($row = mysqli_fetch_array($tue)) {
echo $row['homework'];
}
}
if(mysqli_num_rows($wed)!=0){
echo '<p class="day_p animated fadeIn">Среда</p><hr class="animated fadeIn">';
while($row = mysqli_fetch_array($wed)) {
echo $row['homework'];
}
}
if(mysqli_num_rows($thu)!=0){
echo '<p class="day_p animated fadeIn">Четверг</p><hr class="animated fadeIn">';
while($row = mysqli_fetch_array($thu)) {
echo $row['homework'];
}
}
if(mysqli_num_rows($fri)!=0){
echo '<p class="day_p animated fadeIn">Пятница</p><hr class="animated fadeIn">';
while($row = mysqli_fetch_array($fri)) {
echo $row['homework'];
}
}
if(mysqli_num_rows($mon)==0 and mysqli_num_rows($smon)!=0){
echo '<p class="day_p animated fadeIn">Понедельник</p><hr class="animated fadeIn">';
while($row = mysqli_fetch_array($smon)) {
echo $row['homework'];
}
}
if(mysqli_num_rows($tue)==0 and mysqli_num_rows($stue)!=0){
echo '<p class="day_p animated fadeIn">Вторник</p><hr class="animated fadeIn">';
while($row = mysqli_fetch_array($stue)) {
echo $row['homework'];
}
}
if(mysqli_num_rows($wed)==0 and mysqli_num_rows($swed)!=0){
echo '<p class="day_p animated fadeIn">Среда</p><hr class="animated fadeIn">';
while($row = mysqli_fetch_array($swed)) {
echo $row['homework'];
}
}
if(mysqli_num_rows($thu)==0 and mysqli_num_rows($sthu)!=0){
echo '<p class="day_p animated fadeIn">Четверг</p><hr class="animated fadeIn">';
while($row = mysqli_fetch_array($sthu)) {
echo $row['homework'];
}
}
if(mysqli_num_rows($fri)==0 and mysqli_num_rows($sfri)!=0){
echo '<p class="day_p animated fadeIn">Пятница</p><hr class="animated fadeIn">';
while($row = mysqli_fetch_array($sfri)) {
echo $row['homework'];
}
}
if (mysqli_num_rows($mon) == 0 and mysqli_num_rows($tue) == 0 and mysqli_num_rows($wed) == 0 and mysqli_num_rows($thu) == 0 and mysqli_num_rows($fri) == 0 and mysqli_num_rows($smon) == 0 and mysqli_num_rows($stue) == 0 and mysqli_num_rows($swed) == 0 and mysqli_num_rows($sthu) == 0 and mysqli_num_rows($sfri) == 0){
  echo '<p style="padding-top:10px" class="animated fadeIn">Домашнего задания нет😄.</p>';
}
//Checking internet connection status with predefined function
switch (connection_status())
{
case CONNECTION_ABORTED:
  $msg = 'Вы не подключены к интернету.';
  break;
case CONNECTION_TIMEOUT:
  $msg = 'Connection time-out';
  break;
}
//display connection status
echo $msg;

?>
<div class="share fixed-action-btn animated fadeIn" onclick="sharing()">
  <a class="share_btn btn-floating btn-large mdl-js-button mdl-js-ripple-effect">
    <i class="large material-icons">share</i>
  </a></div>
</div>
</main>
</div>
<script>
const shareBtn = document.querySelector('.share_btn');

shareBtn.addEventListener('click', () => {
  if (navigator.share) {
    navigator.share({
      title: 'Diarry',
      text: 'Лучший сервис для просмотра домашнего задания для школьников в 2020 году.',
      url: window.location.href
    })}})
</script>
</body>
</html>