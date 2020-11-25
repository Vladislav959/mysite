<!doctype html>
<html lang="en">
<head>
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
<title>PizzaCast - show your music!</title>
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
font-family:'Brandon';
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
.carts::-webkit-scrollbar {
    display: none;
}
.carts{
width:auto;
margin-left:-5vw;
height:52vw;
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;

  .cart {
    flex: 0 0 auto;
  }
}
.cart{
width:45vw;
height:52vw;
background:black;
position:relative;
border-radius:1rem;
transition:all .1s ease-in;
padding-top:4vw;
float:left!important;
clear:none;
margin-left:4vw;
transition:all .1s ease-in;
}
.cart:hover .center{
  opacity: 1;
}
.cart:not(.seeall):hover,.cart:not(.seeall):focus{
opacity:0.7;
}
.cart_content{
position:absolute;
width:100%;
bottom:0;
color:white;
opacity:1;
padding-bottom:8px;
}.cart_content .song_name{
text-align:center;
margin:0;
padding-top:0px!important;
font-size:1.5em;
}
.cartimg{
width:32.5vw;
height:32.5vw;
margin:auto;
}
.cartimg img{
width:32.5vw;
height:32.5vw;
border-radius:1rem;
}
.center{
margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
transition:all .1s ease-in;
}
.center i{
font-size:2.2em;
}
.cart_content button{
border:none;
background-color:transparent;
}
::selection{
background:#28fd88;
color:white;
}
.trending_h,.ofsongs_h,.unsongs_h{
font-size:1.95em;
padding-top:50px;
padding-bottom:10px;
}
a,a:hover,a:focus{
color:white;
}
.posa{
position:absolute;
top:47%;
opacity:0;
z-index:9999;
color:black;
background:white;
padding:15px;
border-radius:40px;
}
.song_author{
padding-top:7px;
font-size:1.15em;
color:white;
text-align:center;
margin:0;
}
.posa i{
margin-left:5px;
}
.dop{
width:100%;
height:18.5vh;
}
.addbtn_div{
margin:auto;
width:75vw;
height:5.5vh;
}
.addbtn{
background: rgb(30,185,99);
background: linear-gradient(130deg, rgba(30,185,99,1) 0%, rgba(36,219,118,1) 50%, rgba(40,253,136,1) 100%);
width:75vw;
border:none;
border-radius:12px;
height:5.5vh;
color:white;
font-size:1.4em;
transition:all .1s ease-in;
margin-top:60px;
z-index:2;
position: relative;
}
.addbtn:after {
    content: '';
    position: absolute;
    left: 0px;
    top: 0px;
    right: 0px;
    bottom: 0px;
    background: rgb(30,210,99);
background: linear-gradient(130deg, rgba(30,210,99,1) 0%, rgba(36,244,118,1) 50%, rgba(40,255,136,1) 100%);
    opacity: 0;
border-radius:12px;
z-index:1;
    transition: all .1s ease-in-out;
}

.addbtn:hover:after {
    opacity: 1;
}
.addbtn:focus:after {
    opacity: 1;
}
.addbtn *{
text-align:center;
}
.addbtn i{
margin-right:7px;
font-size:0.9em;
z-index:999;
}
.seeall .cart_content{
padding-bottom:8px!important;
}
.trending_h{
padding-top:20px;
}
</style>
<main class="page">
<h3 class="trending_h">Trending now🔥</h4>
<div class="carts">
<a href=""><div class="cart" style="background:#19a974">
<div class="cartimg"><img src="/ru/wedont.jpeg"></div>
<div class="cart_content"><p class="song_name">We don't talk</p>
<p class="song_author">Charlie Puth</p></div>
<div class="center posa">
    <i class="fa fa-play"></i>
</div>
</div></a>

<a href=""><div class="cart" style="background:#64b5f6">
<div class="cartimg"><img src="/ru/onmyway.jpeg"></div>
<div class="cart_content"><p class="song_name">On my way</p>
<p class="song_author">Alan Walker</p></div>
<div class="center posa">
    <i class="fa fa-play"></i>
</div>
</div></a>
<a href="/trending"><div class="cart seeall">
  <div class="center">
    <i class="fa fa-ellipsis-h"></i>
</div>
<div class="cart_content"><p class="song_name">See all</p></div>
</div></a>
</div>
<h4 class="ofsongs_h">Official songs 🎸</h4>
<div class="carts">
<a href=""><div class="cart" style="background:#ff4135">
<div class="cartimg"><img src="/ru/liveitup.jpg"></div>
<div class="cart_content"><p class="song_name">Live it up</p>
<p class="song_author">Nicky Jam</p></div>
<div class="center posa">
    <i class="fa fa-play"></i>
</div>
</div></a>
<a href=""><div class="cart" style="background:#fbb700">
<div class="cartimg"><img src="/ru/dejavu.jpeg"></div>
<div class="cart_content"><p class="song_name">Deja vu</p>
<p class="song_author">Naika</p></div>
<div class="center posa">
    <i class="fa fa-play"></i>
</div>
</div></a>
<a href="/official"><div class="cart seeall">
  <div class="center">
    <i class="fa fa-ellipsis-h"></i>
</div>
<div class="cart_content"><p class="song_name">See all</p></div>
</div></a>
</div>
<h4 class="unsongs_h">From community🧑‍🎤</h4>
<div class="carts">
<a href=""><div class="cart" style="background:#357edd">
<div class="cartimg"><img src="/ru/believer.jpeg"></div>
<div class="cart_content"><p class="song_name">Believer</p>
<p class="song_author">Imagine Dragons</p></div>
<div class="center posa">
    <i class="fa fa-play"></i>
</div>
</div></a>
<a href=""><div class="cart" style="background:#e91e63">
<div class="cartimg"><img src="/ru/youdeserve.jpeg"></div>
<div class="cart_content"><p class="song_name">You deserve better</p>
<p class="song_author">James Arthur</p></div>
<div class="center posa">
    <i class="fa fa-play"></i>
</div>
</div></a>
<a href="/community"><div class="cart seeall">
  <div class="center">
    <i class="fa fa-ellipsis-h"></i>
</div>
<div class="cart_content"><p class="song_name">See all</p></div>
</div></a>
</div>
<div class="addbtn_div"><button class="addbtn"><i class=" fa fa-plus"></i>Add song</button></div>
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