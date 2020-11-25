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
?>
<!doctype html>
<html lang="ru">
<head>
<meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-title" content="Diarry" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
<link rel="apple-touch-icon" sizes="180x180" href="/diarry/apple-touch-icon-pwa.png">
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
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
h1{
font-family:'Oblivion';}
body{
font-family:'Ubuntu';
font-size:1.3em;
}
h2{
font-family:'Ubuntu';
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
}h1 span{
color:#00eea3;
}
.share_btn{
background-color:#00eea3;
box-shadow:none;
}
.share_btn:focus{
box-shadow:none;
}
.modal {
  /* This way it could be display flex or grid or whatever also. */
  display: block;
  border-radius:10px;
  /* Probably need media queries here */
  width: 65vw;
  max-width: 100%;
  
  height: 160px;
  max-height: 100%;
  
  position: fixed;
  
  z-index: 100;
  padding:3%;
  left: 50%;
  top: 45%;
  font-size:0.8em;
  /* Use this for centering if unknown width/height */
  transform: translate(-50%, -50%);
  
  /* If known, negative margins are probably better (less chance of blurry text). */
  /* margin: -200px 0 0 -200px; */
  text-align:center;
  background: white;
}
.page-content{
-webkit-filter: blur(1.5px);
    -moz-filter: blur(1.5px);
    -o-filter: blur(1.5px);
    -ms-filter: blur(1.5px);
    filter: blur(1.5px);
}
.refresh{
margin-top:10px;
background-color:#00eea3!important;
border-radius:20px!important;
box-shadow:none!important
}
header{
pointer-events: none;
-webkit-filter: blur(1.5px);
    -moz-filter: blur(1.5px);
    -o-filter: blur(1.5px);
    -ms-filter: blur(1.5px);
    filter: blur(1.5px);
}
</style>
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
  <header class="mdl-layout__header animated fadeIn">
    <div class="mdl-layout__header-row"> 
      <div class="mdl-layout-spacer"></div>      
        <a href="/diarry/"> <div class="mylogo_div mdl-button mdl-js-button mdl-button--icon">
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
    <div class="page-content">

</div>
</main>
</div>
<div class="modal animated fadeIn" id="modal">
    <p>Невозможно загрузить страницу, нет интернета. Проверьте подключение к сети.</p><a href="javascript:location.reload(true)">
<button class="refresh mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">Перезагрузить</button></a>
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