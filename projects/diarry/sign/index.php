<?php
if(isset($_COOKIE['login'])){
echo '<script>location.href="/diarry/profile/";</script>';
$src="profile";
$vis="Профиль";
}
else{
$src="sign";
$vis="Вход";
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
<title>Вход - Diarry - удобное домашнее задание</title>
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
input[type="text"]{
border:2px solid #00eea3;
border-radius:5px;
width:84vw;
font-size:1.3em;
padding:3%;
margin-top:10px;
color:black;
}
input[type="password"]{
border:2px solid #00eea3;
border-radius:5px;
width:84vw;
font-size:1.3em;
padding:3%;
margin-top:10px;
color:black;
}

input[type="submit"]{
border-radius:5px;
padding:3%;
font-size:1em;
border:2px solid #00eea3;
background-color:transparent;
margin-top:10px
}
input[type="button"]{
border-radius:5px;
padding:3%;
font-size:1em;
border:2px solid #00eea3;
background-color:transparent;
margin-top:10px
}@media (prefers-color-scheme:dark){
textarea{color:white;background-color:transparent}
input[type="text"]{color:white;background-color:transparent}input[type="submit"]{color:white}
input[type="button"]{color:white}
::placeholder{
color:white;
}
}
select{width:84vw;padding:3%;font-size:1.3em;background-color:transparent;border:2px solid #00eea3;border-radius:5px
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
<h1 class="animated fadeIn">Вход</h1>
<form id="form" class="animated fadeIn" method="post" action="testreg.php">
  <p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="20">
  </p>
  <p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="20" maxlength="20">
  </p>
<p>
<input type="submit" name="submit" value="Войти">
<br> 
<a href="reg.php" class="animated fadeIn"><input type="button" value="Зарегистрироваться"></a> 
</p></form>
<br>
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
            url: 'testreg.php',
            data: $(this).serialize(),
            success: function(){alert('Успешно!');location.href="/diarry/profile/}
       });
     });
})
</script>
</body>
</html>
