<?php
if(!isset($_COOKIE['login']) and !isset($_COOKIE['email'])){
exit('<script>location.href="/sign";</script>');
}
if(!isset($_COOKIE['login']) and isset($_COOKIE['email'])){
exit('<script>location.href="/continue";</script>');
}
if(!isset($_POST['codeid'])){
exit('<script>location.href="/profile";</script>');}
$db = mysqli_connect ("localhost","u0935856_default","z6JXDSO!", "u0935856_default");
$id = $_POST['codeid'];
mysqli_set_charset($db, "utf8") ; 
$request = mysqli_query($db,"SELECT * FROM `codes` WHERE `id` = '$id'");
while($row = mysqli_fetch_array($request)) {
$text = $row['text'];
$name = $row['filename'];
$uid = $row['uid'];
$makec = $row['makec'];
$vieww = $row['vieww'];
}
if($uid!=$_COOKIE['id']){
echo '<script>location.href="/"</script>';
}
if($uid!=$_COOKIE['id'] and $makec!='on'){
echo '<script>location.href="/"</script>';
}
$text = substr($text,17);
$text = substr($text,0,-5);
if(isset($_COOKIE['email'])){
$dest = '/profile';
}
else{
$dest = '/code?id=' . $id;
}
$ischecked = '';
if($makec=='on'){
$ischecked1 = 'checked="checked"';
}
if($vieww=='on'){
$ischecked2 = 'checked="checked"';
}
$a = '<li><a href="/sign">Sign in</a></li><li><a href="/reg">Sign up</a></li>';
if(isset($_COOKIE['email']) and isset($_COOKIE['login'])){
$a = '<li><a class="active" href="/profile">Profile</a></li><li><a class="red" href="/profile/sesd.php">Sign out</a></li>';
}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Edit f-code <?php echo $name;?> - FastyCodes - a simple shortener for developers</title>
<meta name="description" content="With FastyCodes you can easily share your code to the world with short links.">
<meta property="og:image" content="https://fastycode.site/logo.png">
<meta name="author" content="FastyCodes">
<meta name="keywords" content="code, code shortener,web,webdev,developers,sites,code a site">
  <link rel="canonical" href="https://fastycode.site/profile/edit">
<link rel="icon" type="image/png" href="/logo.png" />
<link rel="shortcut icon" type="image/png" href="/logo.png" />
<link rel="stylesheet" href="/profile/edit/style.css?v=<?=filemtime($_SERVER["DOCUMENT_ROOT"]."/profile/edit/style.css")?>">
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
<h1 class="mh">Edit <?php echo $name;?></h1>
<form method="post" action="/profile/edit/makepost.php" id="form" method="post">
       <input type ="hidden" value="<?php echo $id;?>" name="codeid"><p><label>Name:<br></label>
<input name="filename" value='<?php echo $name; ?>' type="text"></p>
<p>
    <label>Code:<br></label>
<input type="button" class="symbtn" value="<" onclick="symb(this.value)">
<input type="button" class="symbtn" value=">" onclick="symb(this.value)">
<input type="button" class="symbtn" value="(" onclick="symb(this.value)">
<input type="button" class="symbtn" value=")" onclick="symb(this.value)">
<input type="button" class="symbtn" value="{" onclick="symb(this.value)">
<input type="button" class="symbtn" value="}" onclick="symb(this.value)"><textarea id="codet" name="text" required><?php echo $text;?></textarea></p>
<p><label>Language:</label><select name="lang"><option value="html">HTML</option><option value="css">CSS</option><option value="javascript">JavaScript</option><option value="java">Java</option><option value="json">JSON</option></select></p>
<label class="container">Can people change it?
  <input type="checkbox" name="makec" <?php echo $ischecked1;?>>
  <span class="checkmark"></span>
</label>
<label class="container">Can people view it only by link?
  <input type="checkbox" name="vieww" <?php echo $ischecked2;?>>
  <span class="checkmark"></span>
</label>
            <input type="submit" value="Confirm changes">
        </form>
</section>
<footer>
<p>Made by <a href="https://twitter.com/gubarev_dev">@gubarev_dev</a>. Follow me on Twitter.</p>
<p><a href="https://gubarev.site">My site</a></p>
<p>&#169; 2020 FastyCodes</p>
</footer>
<script>
$(document).ready(function() {
    $('#form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '/profile/edit/makepost.php',
            data: $(this).serialize(),
            success: function(){location.href="<?php echo $dest;?>"}
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