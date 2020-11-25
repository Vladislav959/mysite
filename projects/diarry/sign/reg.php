<?php
if(isset($_COOKIE['login'])){
echo '<script>location.href="/diarry/profile/"</script>';
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
<title>Регистрация - Diarry - удобное домашнее задание</title>
<meta name="theme-color" content="#00eea3">
<link rel="manifest" href="/diarry/manifest.json">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><script>
var vall = $(".roleselect").val();
if(vall === "teacher") {
        $(".code").show();
        $(".codeinput").attr("required", true);
$(".subjectselect").attr("required", true)
    }
    else if(vall === "pupil"){
$(".code").hide();
$(".codeinput").attr("required", false);
$(".subjectselect").attr("required", false)
}
$(function () {
  $(".roleselect").change(function() {
    var val = $(this).val();
    if(val === "teacher") {
        $(".code").show();
        $(".codeinput").attr("required", true)
$(".subjectselect").attr("required", true)
    }
    else if(val === "pupil"){
$(".code").hide();
$(".codeinput").attr("required", false)
$(".subjectselect").attr("required", false)
}
  });
});
</script>
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
font-family:'Ubuntu';
}
input[type="password"]{
border:2px solid #00eea3;
border-radius:5px;
width:84vw;
font-size:1.3em;
padding:3%;
margin-top:10px;
color:black;font-family:'Ubuntu';
}

input[type="submit"]{
border-radius:5px;
padding:3%;
font-size:1em;
border:2px solid #00eea3;
background-color:transparent;
margin-top:10px;
font-family:'Ubuntu';
}
input[type="file"]{
border-radius:5px;
padding:3%;
font-size:1em;
font-family:'Ubuntu';
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
margin-top:10px;font-family:'Ubuntu';
}@media (prefers-color-scheme:dark){
textarea{color:white;background-color:transparent}
input[type="text"]{color:white;background-color:transparent}input[type="submit"]{color:white}input[type="button"]{color:white}
::placeholder{
color:white;
}
select{
color:white
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
<h1 class="animated fadeIn">Регистрация</h1>
<form id="form" class="animated fadeIn" action="save_user.php" enctype="multipart/form-data" method="post">
<!--**** save_user.php - это адрес обработчика. То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей отправятся на страничку save_user.php методом "post" ***** -->
  <p>
    <label>Ваш логин*:<br></label>
    <input name="login" type="text" size="15" maxlength="15" required>
  </p>
<p>
    <label>Ваше имя*:<br></label>
    <input name="myname" type="text" size="15" maxlength="20" required>
  </p>
<p>
              <label>Выберите аватар.<br></label>
              <input type="file" name="fupload">
            </p>
<p>
    <label>Ваша роль*:<br></label>
    <select name="role" class="roleselect" required>
<option selected></option>
<option value="pupil">Ученик</option>
<option value="teacher">Учитель</option>
</select>
  </p>
<div class="code" style="display:none;">
<p>
    <label>Код*:<br></label>
    <input class="codeinput" type="text" name="code">
</p>
<p>
    <label>Предмет*:<br></label>
    <select placeholder="Предмет" class="subjectselect" name="subject" required>
<option selected></option>
<option value="Русский язык">Русский язык</option>
<option value="Математика">Математика</option>
<option value="Физкультура">Физкультура</option>
<option value="Литература">Литература</option>
<option value="Английский язык">Английский язык</option>
<option value="Обществознание">Обществознание</option>
<option value="Французский язык">Французский язык</option>
<option value="История">История</option>
<option value="География">География</option>
<option value="Музыка">Музыка</option>
<option value="ИЗО">ИЗО</option>
<option value="Биология">Биология</option>
</select>
</p>
</div>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->  
  <p>
    <label>Ваш пароль*:<br></label>
    <input name="password" type="password" size="15" maxlength="15" required>
  </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->  
<p>
<input type="submit" name="submit" value="Зарегистрироваться">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** -->  
</p></form><a href="index.php" class="animated fadeIn"><input type="button" value="Войти"></a> 
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
<script>
$(document).ready(function() {
    $('#form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'save_user.php',
            data: $(this).serialize(),
            success: function(){alert('Успешно!');location.href="/diarry/profile/}
       });
     });
})
</script>
</body>
</html>