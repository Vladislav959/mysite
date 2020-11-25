<?php
if($_COOKIE['login']!="admin"){
echo '<script>location.href="/diarry/";</script>';
}
if(isset($_COOKIE['login'])){
$src="profile";
$vis="Профиль";
}
else{
$src="sign";
$vis="Вход";
}
$role = $_SESSION['role'];
$panela='';
if($role=='teacher')
{
$panela = '<a class="mdl-navigation__link" href="/diarry/create/">Панель</a>';
}
else if($role=='admin'){
$panela = '<a class="mdl-navigation__link" href="/diarry/makeindex.php">Панель</a>';
}
$day = date('d');
$month = date('m');
$month = $month +1;
$year = date('o');
if($month<10){
$date = $year . '-0' . $month . '-' . $day;
}
else{
$date = $year . '-' . $month . '-' . $day;
}
$day = $day +1;
$month = date('m');
$datef = $year . '-' . $month . '-' . $day;
?>
<!doctype html>
<html lang="ru">
<head>
<script>
if ('serviceWorker' in navigator) {
navigator.serviceWorker.register("/diarry/sw.js");
}
</script>
<meta name="mobile-web-app-capable" content="yes" /><link rel="apple-touch-icon" sizes="180x180" href="/diarry/apple-touch-icon-pwa.png">
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-title" content="Diarry" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
<meta name="description" content="Diarry - удобный сервис для просмотра домашнего задания в 2020 году.">
<meta name="author" content="Diarry">
<meta name="keywords" content="электронный дневник, дневник, дз, дневник дз, дз дневник, узнать дз, школа, дневник мос ру">
<link rel="icon" type="image/png" href="/diarry/mylogo.png" />
<link rel="shortcut icon" type="image/png" href="/diarry/logo.png" />
<title>Панель - Diarry</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="/animate.css?v=<?=filemtime($_SERVER["DOCUMENT_ROOT"]."/animate.css")?>">
<link rel="stylesheet" href="/app.css?v=<?=filemtime($_SERVER["DOCUMENT_ROOT"]."/app.css")?>">
<script defer src="/app.js?v=<?=filemtime($_SERVER["DOCUMENT_ROOT"]."/app.js")?>"></script>
<meta name="theme-color" content="#00eea3">
<link rel="manifest" href="/diarry/manifest.json">
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
input[type="date"]{
border:2px solid #00eea3;
border-radius:5px;
width:84vw;
font-size:1.3em;
padding:3%;
margin-top:10px;
color:black;
background-color:transparent
}
textarea{
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
::placeholder{
color:black;
}
@media (prefers-color-scheme:dark){
textarea{color:white;background-color:transparent}
input[type="text"]{color:white;background-color:transparent}input[type="submit"]{color:white}select{
color:white}input[type="date"]{
color:white;}
::placeholder{
color:white;
}
}
select{width:84vw;padding:3%;font-size:1.3em;background-color:transparent;border:2px solid #00eea3;border-radius:5px
}
</style>
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
  <header class="mdl-layout__header animated fadeIn">
    <div class="mdl-layout__header-row"> 
      <div class="mdl-layout-spacer"></div>      
        <a href="/diarry/"> <div class="mylogo_div mdl-button mdl-js-button mdl-button--icon">
          <img class="mylogo" src="/diarry/logo.png">
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
<h1 class="animated fadeIn">Панель</h1>
<form method="post" class="animated fadeIn" action="makepost.php" id="form" method="post">
           <p>
    <label>Предмет:<br></label> <select name="title" required>
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
</select></p><p>
    <label>Дата выполнения:<br></label>
<input type="date" id="start" name="date"
       value="<?php echo $datef;?>"
       min="<?php echo $datef;?>" max="<?php echo $date;?>" required></p>
<p>
    <label>Задание:<br></label>
            <textarea width="100" height="50" name="text" required></textarea>
         </p>
            <input type="submit">
        </form>
<form method="post" class="animated fadeIn" action="delete.php" id="form2">
<input style="float:right;margin-top:-48.5px" type="submit" value="Удалить все">
</form>
<form method="post" class="animated fadeIn" action="deleteone.php" id="form3">
<input style="float:right:" type="submit" value="Удалить последнее">
</form>
</div>
</main>
</div>   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'makepost.php',
            data: $(this).serialize(),
            success: function(){alert('Успешно!');location.href="/diarry/"}
       });
     });
})
$(document).ready(function() {
    $('#form2').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'delete.php',
            data: $(this).serialize(),
            success: function(){alert('Успешно!');location.href="/diarry/"}
       });
     });
})
$(document).ready(function() {
    $('#form3').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'deleteone.php',
            data: $(this).serialize(),
            success: function(){alert('Успешно!');location.href="/diarry/"}
       });
     });
})
</script>
    </body>
</html>