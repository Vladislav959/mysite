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
$day = date('N');
$hour = date('G');
$act1 = '';
$act2 = '';
$act3 = '';
$act4 = '';
$act5 = '';
if ($day==1 and $hour<16){
$act1='is-active';
}
else if ($day==2 and $hour<16){
$act2='is-active';
}
else if ($day==3 and $hour<16){
$act3='is-active';
}
else if ($day==4 and $hour<16){
$act4='is-active';
}
else if ($day==5 and $hour<16){
$act5='is-active';
}
else if ($day==1 and $hour>=16){
$act2='is-active';
}
else if ($day==2 and $hour>=16){
$act3='is-active';
}
else if ($day==3 and $hour>=16){
$act4='is-active';
}
else if ($day==4 and $hour>=16){
$act5='is-active';
}
else if ($day==5 and $hour>=16){
$act1='is-active';
}
else if(day==6 or day==0){
$act1='is-active';
}
$db = mysqli_connect ("localhost","u0935856_default","z6JXDSO!", "u0935856_default");
mysqli_set_charset($db, "utf8") ;
$nextmon = date('d', strtotime('next Monday'));
$nexttue = date('d', strtotime('next Tuesday'));
$nextwed = date('d', strtotime('next Wednesday'));
$nextthu = date('d', strtotime('next Thursday'));
$nextfri = date('d', strtotime('next Friday'));
$monmath = mysqli_query($db,"SELECT * FROM `diarry` WHERE `expires`='$nextmon' AND `subject`='Математика'");
$monfr = mysqli_query($db,"SELECT * FROM `diarry` WHERE `expires`='$nextmon' AND `subject`='Французский язык'");
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
<link rel="apple-touch-icon" sizes="180x180" href="/diarry/apple-touch-icon-pwa.png">
<meta name="description" content="Diarry - удобный сервис для просмотра домашнего задания в 2020 году. Сайт оптимизирован под все устройства и поддерживает тренды дизайна 2020 года.">
<meta name="author" content="Diarry">
<meta name="keywords" content="электронный дневник, дневник, дз, дневник дз, дз дневник, узнать дз, школа, дневник мос ру">
  
<link rel="icon" type="image/png" href="/diarry/logo.png" />
<link rel="shortcut icon" type="image/png" href="/diarry/logo.png" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="/animate.css?v=<?=filemtime($_SERVER["DOCUMENT_ROOT"]."/animate.css")?>">
<link rel="stylesheet" href="/app.css?v=<?=filemtime($_SERVER["DOCUMENT_ROOT"]."/app.css")?>">
<script defer src="/app.js?v=<?=filemtime($_SERVER["DOCUMENT_ROOT"]."/app.js")?>"></script>
<title>Расписание - Diarry - удобное домашнее задание</title>
<meta name="theme-color" content="#00eea3">
<link rel="manifest" href="/diarry/manifest.json">
</head>
<body>
<style>
@font-face {
  font-family: 'Oblivian';
  src: url('/diarry/obl-bold.otf');
}
@font-face {
  font-family: 'Ubuntu';
  src: url('/diarry/ubuntu.ttf');
}
h1,h2,h3{
font-family:'Ubuntu';}
body{
font-family:'Ubuntu';
font-size:1.3em;
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
.schedule{
border:2px solid #00eea3;
border-radius:15px;
padding:2%;
margin-top:20px;
}
.schedule_card{
border-bottom:1.5px solid #00eea3;
padding:1%;
padding-top:10px;
}
.schedule_card:last-of-type{
border-bottom:none;
}
.schedule_card:first-of-type{
padding-top:1%;
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
      <a href="/diarry/">  <div class="mylogo_div mdl-button mdl-js-button mdl-button--icon">
          <img class="mylogo" src="/diarry/logom.png">
        </div></a>
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
    <div class="page-content"
<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
  <div class="mdl-tabs__tab-bar">
      <a href="#monday-panel" class="mdl-tabs__tab <?php echo $act1;?>">ПН</a>
      <a href="#tuesday-panel" class="mdl-tabs__tab <?php echo $act2;?>">ВТ</a>
      <a href="#wednesday-panel" class="mdl-tabs__tab <?php echo $act3;?>">СР</a>
<a href="#thursday-panel" class="mdl-tabs__tab <?php echo $act4;?>">ЧТ</a>
<a href="#friday-panel" class="mdl-tabs__tab <?php echo $act5;?>">ПТ</a>
  </div>

  <div class="mdl-tabs__panel <?php echo $act1;?>" id="monday-panel">
    <div class="schedule">
<div class="schedule_card">
<p class="schedule_h">Математика</p>
<p class="schedule_time">8:30 - 9:15</p>
<?php while($row = mysqli_fetch_array($monmath)) {echo $row['work'];}?>
</div>
<div class="schedule_card">
<p class="schedule_h">Французский язык</p>
<p class="schedule_time">9:30 - 10:15</p>
<?php while($row = mysqli_fetch_array($monfr)) {echo $row['work'];}?>
</div>
<div class="schedule_card">
<p class="schedule_h">Математика</p>
<p class="schedule_time">10:35 - 11:20</p>
</div>
  </div>
  <div class="mdl-tabs__panel <?php echo $act2;?>" id="tuesday-panel">
<div class="schedule_card">
<p class="schedule_h">Оуссктй</p>
<p class="schedule_time">10:35 - 11:20</p>
</div>
  </div>
  <div class="mdl-tabs__panel <?php echo $act3;?>" id="wednesday-panel">
<div class="schedule_card">
<p class="schedule_h">Математика</p>
<p class="schedule_time">10:35 - 11:20</p>
</div>
  </div>
<div class="mdl-tabs__panel <?php echo $act4;?>" id="thursday-panel">
    
  </div>
<div class="mdl-tabs__panel <?php echo $act5;?>" id="friday-panel">
    
  </div>
</div>
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