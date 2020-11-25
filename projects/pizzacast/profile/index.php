<?php session_start();
if(isset($_SESSION['signnow'])){
$myname = $_SESSION['myname'];
$login = $_SESSION['login'];
$email = $_SESSION['email'];
$avatar = $_SESSION['avatar'];
$id = $_SESSION['id'];
setcookie('email', $email, time()+60*60*24*30, "/");
setcookie('login', $login, time()+60*60*24*30, "/");
setcookie('myname', $myname, time()+60*60*24*30, "/");
setcookie('id', $id, time()+60*60*24*30, "/");
setcookie('avatar', $avatar, time()+60*60*24*30, "/");
session_destroy();
exit('<script>document.location.reload(true)</script>');
}
if(isset($_SESSION['continuenow'])){
$login = $_SESSION['login'];
setcookie('login', $login, time()+60*60*24*30, "/");
session_destroy();
exit('<script>document.location.reload(true)</script>');
}
if(isset($_SESSION['changenow'])){
setcookie('email', '', time() -3600, "/");
setcookie('login', '', time() -3600, "/");
setcookie('myname', '', time() -3600, "/");
setcookie('id', '', time() -3600, "/");
setcookie('avatar', '', time() -3600, "/");
$myname = $_SESSION['myname'];
$email = $_SESSION['email'];
$avatar = $_SESSION['avatar'];
$id = $_SESSION['id'];
$login = $_SESSION['login'];
setcookie('email', $email, time()+60*60*24*30, "/");
setcookie('login', $login, time()+60*60*24*30, "/");
setcookie('myname', $myname, time()+60*60*24*30, "/");
setcookie('id', $id, time()+60*60*24*30, "/");
          
setcookie('avatar', $avatar, time()+60*60*24*30, "/");
session_destroy();
exit('<script>document.location.reload(true)</script>');
}
if(!isset($_COOKIE['login']) and !isset($_COOKIE['email'])){
exit('<script>location.href="/sign";</script>');
}
else if(!isset($_COOKIE['login']) and isset($_COOKIE['email'])){
exit('<script>location.href="/continue";</script>');
}
$a = '<li><a href="/sign">Sign in</a></li><li><a href="/reg">Sign up</a></li>';
if(isset($_COOKIE['email']) and isset($_COOKIE['login'])){
$a = '<li><a class="active" href="/profile">Profile</a></li><li><a class="red" href="/profile/sesd.php">Sign out</a></li>';
}
if(isset($_COOKIE['email']) and !isset($_COOKIE['login'])){
$a = '<li><a href="/continue">Finish registration</a></li><li><a class="red" href="/profile/sesd.php">Sign out</a></li>';
}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>My profile - FastyCodes - a simple shortener for developers</title>
<meta name="description" content="With FastyCodes you can easily share your code to the world with short links.">
<meta property="og:image" content="https://fastycode.site/logo.png">
<meta name="author" content="FastyCodes">
<meta name="keywords" content="code, code shortener,web,webdev,developers,sites,code a site">
  <link rel="canonical" href="https://fastycode.site/profile">
<link rel="icon" type="image/png" href="/logo.png" />
<link rel="shortcut icon" type="image/png" href="/logo.png" />
<link rel="stylesheet" href="/profile/style.css?v=<?=filemtime($_SERVER["DOCUMENT_ROOT"]."/profile/style.css")?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><img src="/logoc.png"></label>
      <ul>
<li><a href="/">Home</a></li>
<li><a href="/create">Create</a></li>
<?php echo $a;?>
</ul>
</nav>
    <section>
<h1 class="pagename">Profile</h1>
<?php
$db = mysqli_connect ("localhost","u0935856_default","z6JXDSO!", "u0935856_default");
mysqli_set_charset($db, "utf8") ; 
$id = $_COOKIE['id'];
$requestp = mysqli_query($db,"SELECT * FROM `fusers` WHERE `id` = $id");
while($row = mysqli_fetch_array($requestp)) {
$avatar = $row['avatar'];
$myname = $row['myname'];
$login = $row['login'];
}
?>
<div class="avatar_div"><img class="avatar" src="<?php echo $avatar;?>"> </div>
<p>Your name: <?php echo $myname;?></p>
<p class="usern">Username: <?php echo $login;?></p>
<hr>
<h2 style="font-size:1.8em;padding-bottom:10px;" class="yfc">Your f-codes</h2>
<?php
$request = mysqli_query($db,"SELECT * FROM `codes` WHERE `uid` = $id");
while($row = mysqli_fetch_array($request)) {
echo $row['card'];
}
?>

<div class="addcode-c"><a href="/profile/add"><button class="addcode"><img src="/profile/add.png"></button></a></div>
<form method="post" class="animated fadeIn" action="/profile/sesd.php" id="form">
<input class="signout" type="submit" value="Sign out">
</form>
<a href="/change"><button class="changeaccbtn">Edit account</button></a>
<button class="delbtn" id="myBtn">Delete account</button>

<div class="modal" id="myModal">

  <div class="modal-content">
<p>Are you sure?</p>
<form method="post" class="animated fadeIn" action="/profile/delacc.php" id="form"><input type="button" class="delnobtn" value="Cancel">
<input class="delyesbtn" type="submit" value="Delete account">
</form>
  </div>
</div>
    <footer>
<p>Made by <a href="https://twitter.com/gubarev_dev">@gubarev_dev</a>. Follow me on Twitter.</p>
<p><a href="https://gubarev.site">My site</a></p>
<p>&#169; 2020 FastyCodes</p>
</footer>
</section>

<script>
var modal = document.getElementById("myModal");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("delnobtn")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}</script>
	</body>
</html>