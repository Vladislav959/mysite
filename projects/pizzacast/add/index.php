<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<meta name="author" content="PizzaCast">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<meta name="author" content="PizzaCast">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="icon" type="image/png" href="/ru/pizzacast.jpg" />
<link rel="shortcut icon" type="image/png" href="/ru/pizzacast.jpg" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1">
<title>Add song - PizzaCast - show your music!</title>
<meta name="theme-color" content="#28fd88">
<link rel="stylesheet" href="/animate.css?v=<?=filemtime($_SERVER["DOCUMENT_ROOT"]."/animate.css")?>">
</head>
<body class="animated fadeIn">
<style>
body{width:100%;min-height:100%}html,body{font-weight:400;line-height:20px}
@font-face{
font-family:'Brandon';
src:url('/ru/brandon.ttf')
}
@font-face{
font-family:'Sequel';
src:url('/pizzacast/sequel.ttf')
}
.logo{
width:45px;
height:45px;
}
body{
font-family:'Brandon';
color:white;
margin:0;
}
h1,h2,h3,h4{
color:white;
font-family:'Sequel';
margin-bottom:0px;
padding-bottom:3.5px;
}
body a{
font-family:'Brandon';
}
body{
width:auto;
background:#35363a!important;
}
.navbar{
background:black!important;
}
.navbar *{
font-size:1.04em;
}
:focus{
outline:none!important;
}
.nav-link{
color:white!important;
}
.mtitle{
padding-top:10px;
color:white!important;
}
.navbar-toggler{
border:none!important;
}
.mtitle span{
color:#28fd88;
}
main{
padding-left:3.5vw;
padding-right:3.5vw;
}
.dop{
width:100%;
height:18.5vh;
}
form input:not([type="submit"]), form select{
width:93vw;
padding:12px;
color:white;
background:transparent;
border-radius:0.65rem;
font-size:1.45em;
border:2px solid #28fd88;
}
form label{
font-size:1.6em;
padding-top:10px;
padding-bottom:10px;
}
form input[type="submit"]{
width:20vw;
margin-top:15px;
border:1.5px solid #28fd88;
border-radius:0.4rem;
background:transparent;
font-size:1.3em;
padding:8px;
color:white;
}
</style>
<main class="page">
<h2>Add song</h2>
<form enctype="multipart/form-data" method="post" action="/pizzacast/add/makepost.php" id="form"><p><label>Name:<br></label><input name="songname" type="text" required></p><p><label>Author:<br></label><input type="text" name="author"></p><p><label>Language:</label><select name="background"><option value="red">Red</option><option value="yellow">Yellow</option><option value="green">Green</option><option value="blue">Blue</option><option value="skyblue">Skyblue</option><option value="pink">Pink</option></select></p>
<input type="file" name="fupload">
<input type="file" name="mp3">
<input type="submit" value="Submit"></form>
<div class="dop"></div>
</main>
<nav class="navbar fixed-bottom navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href=""><img class="logo" src="/ru/pizzacast.jpg"></a>
<p class="mtitle" style="font-size:1.7em!important;"><span>P</span>izza<span>C</span>ast</p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/pizzacast">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pizzacast/trending">Trending</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pizzacast/add">Add song</a>
      </li>
    </ul>
<span class="navbar-text">
Sign out
</span>
  </div>
</nav>

</body></html>