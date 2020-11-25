<?php 
if(!isset($_COOKIE['login'])){
echo '<script>location.href="/diarry/sign/";</script>';
}
else if(isset($_COOKIE['login'])){
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
$role = 'учитель';
}
else if($role=='pupil'){
$role ='ученик';
}
else if($role=='pizza'){
$role ='просто пицца';
}
else if($role=='admin'){
$panela = '<a class="mdl-navigation__link" href="/diarry/makeindex.php">Панель</a>';
$role ='администратор';
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
<title>Профиль - Diarry - удобное домашнее задание</title>
<meta name="theme-color" content="#00eea3">
<link rel="manifest" href="/diarry/manifest.json">

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
.mylogo_div{
width:50px;
height:50px;
}
.mylogo{
width:50px;
height:50px;
}
input[type="submit"]{
border-radius:5px;
padding:3%;
font-size:1em;
border:2px solid #00eea3;
background-color:transparent;
margin-top:10px
}
@media (prefers-color-scheme:dark){
input[type="submit"]{color:white}
::placeholder{
color:white;
}
}
.mylogo_div{
width:50px;
height:50px;
}
.mylogo{
width:50px;
height:50px;
}
.avatar{
width:150px;
height:150px;
border-radius:50%;object-fit: cover;
}
.avatar_div{object-fit: cover;
width:150px;
height:150px;
margin:auto;
margin-bottom:20px;
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
<h1 class="animated fadeIn">Профиль</h1>
<div class="avatar_div animated fadeIn"><img class="avatar" src="<?php echo $_COOKIE['avatar'];?>"> </div>
<p class="animated fadeIn">Ваше имя: <?php echo $_COOKIE['myname'];?></p>
<p class="animated fadeIn">Ваша роль: <?php echo $role;?></p>
<?php if($_COOKIE['role']=='teacher'){echo '<p class="animated fadeIn">Ваш предмет: ' . $_COOKIE['subject'] . '</p>';}?>
<form method="post" class="animated fadeIn" action="sesd.php" id="form">
<input  type="submit" value="Выйти">
</form>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'sesd.php',
            data: $(this).serialize(),
            success: function(){alert('Успешно!');location.href="/diarry/"}
       });
     });
})
</script>
</body>
</html>
