<?php session_start();
if(!isset($_COOKIE['login']) and !isset($_COOKIE['email'])){
exit('<script>location.href="/sign";</script>');
}
else if(!isset($_COOKIE['login']) and isset($_COOKIE['email'])){
exit('<script>location.href="/continue";</script>');
}
$a = '<li><a href="/sign">Sign in</a></li><li><a href="/reg">Sign up</a></li>';
if(isset($_COOKIE['email']) and isset($_COOKIE['login'])){
$a = '<li><a class="active" href="/profile">Profile</a></li><li class="red"><a class="red" href="/profile/sesd.php"><p>Sign out</p></a></li>';
}
if(isset($_COOKIE['email']) and !isset($_COOKIE['login'])){
$a = '<li><a href="/continue">Finish registration</a></li><li><a class="red" href="/profile/sesd.php">Sign out</a></li>';
}
$dop = '';
if(isset($_GET['ex'])){
$dop = '<p class="incor">Filename is already exists.</p>';
}
if(isset($_GET['cl'])){
$dop = '<p class="incor">Code is too little.</p>';
}
if(isset($_GET['cm'])){
$dop = '<p class="incor">Code is too long.</p>';
}
if(isset($_GET['nm'])){
$dop = '<p class="incor">Filename is too long.</p>';
}
$allval = '<h1 class="mh">Add f-code</h1>' . $dop . '<form method="post" action="/profile/add/makepost.php" id="form" method="post"><p><label>Filename:<br></label><input name="filename" type="text" required></p><p><label>Code:<br></label><input type="button" class="symbtn" value="<" onclick="symb(this.value)">
<input type="button" class="symbtn" value=">" onclick="symb(this.value)">
<input type="button" class="symbtn" value="(" onclick="symb(this.value)">
<input type="button" class="symbtn" value=")" onclick="symb(this.value)">
<input type="button" class="symbtn" value="{" onclick="symb(this.value)">
<input type="button" class="symbtn" value="}" onclick="symb(this.value)"><textarea id="codet" name="text" required></textarea></p><p><label>Language:</label><select name="lang"><option value="html">HTML</option><option value="css">CSS</option><option value="javascript">JavaScript</option><option value="php">PHP</option><option value="java">Java</option><option value="json">JSON</option></select></p><label class="container">Can people change it?<input type="checkbox" name="makec"><span class="checkmark"></span></label><label class="container">Can people view it only by the link?<input type="checkbox" name="vieww"><span class="checkmark"></span></label><input type="submit" value="Create"></form>';
$id = $_SESSION['id'];
if(isset($_GET['success'])){
$db = mysqli_connect ("localhost","u0935856_default","z6JXDSO!", "u0935856_default");
    $result = mysqli_query($db, "SELECT * FROM `codes` WHERE `id`='$id'");
while($row = mysqli_fetch_array($result)) {
$url = $row['url'];
}
$allval = '<h1 class="mh">Success!</h1><p class="topad">Url to share:</p><p class="url">' . $url. '</p><a class="makea" href="/profile/add"><p>Make another f-code</p></a>';
}
session_destroy();
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Add code - FastyCodes - a simple shortener for developers</title>
<meta name="description" content="With FastyCodes you can easily share your code to the world with short links.">
<meta property="og:image" content="https://fastycode.site/logo.png">
<meta name="author" content="FastyCodes">
<meta name="keywords" content="code, code shortener,web,webdev,developers,sites,code a site">
  <link rel="canonical" href="https://fastycode.site/profile/add">
<link rel="icon" type="image/png" href="/logo.png" />
<link rel="shortcut icon" type="image/png" href="/logo.png" />
<link rel="stylesheet" href="/profile/add/style.css?v=<?=filemtime($_SERVER["DOCUMENT_ROOT"]."/profile/add/style.css")?>">
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
</nav><section>
<?php echo $allval;?>
<footer>
<p>Made by <a href="https://twitter.com/gubarev_dev">@gubarev_dev</a>. Follow me on Twitter.</p>
<p><a href="https://gubarev.site">My site</a></p>
<p>&#169; 2020 FastyCodes</p>
</footer>
</section>
<script>
$(document).ready(function() {
    $('#forms').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '/profile/add/makepost.php',
            data: $(this).serialize(),
            success: function(){location.href="/profile"}
       });
     });
})
function symb(cntrl){
       
        $("#codet").val(function (_, val) {
            return val + cntrl
        });
$("#codet").focus();
}
</script>
    </body>
</html>