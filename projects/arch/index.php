<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sushko Arhitects</title>
<meta name="description" content="Описание.">
<meta name="author" content="Sushko Arhitects">
<link rel="icon"
  href="/projects/arch/logo.png"
  id="light-scheme-icon">
<link rel="icon"
  href="/projects/arch/logodark.png"
  id="dark-scheme-icon">
<link rel="stylesheet" href="/animate.css?v=<?=filemtime($_SERVER["DOCUMENT_ROOT"]. "/animate.css")?>">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="/projects/arch/style.css?v=<?=filemtime($_SERVER["DOCUMENT_ROOT"]. "/projects/arch/style.css")?>">
  </head>
  <body>
    <nav class="animated fadeIn">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><img src="/projects/arch/logo.png"></label>
      <ul>
<li><a href="/projects/arch">Главная</a></li>
<li><a href="/projects/arch/about">Обо мне</a></li>
<li><a href="/projects/arch/works">Мои работы</a></li>
</ul>
</nav><section>

<div class="hello"><div class="logobig_div animated fadeIn wow"><img src="/projects/arch/logobig.jpg"></div>
<div class="arrow_div animated fadeIn wow"><a href="#about" class="scrollto"><img src="/projects/arch/arrow.png"></a></div></div>
<div class="dop_about" id="about"></div><div class="about animated fadeIn wow">
<div class="avatar"><img src="/projects/arch/avatar.jpg"></div>

<div class="about_p"><p class="about_first">Евгений Сушко</p>
<p class="about_second">Архитектор</p></div>
</div>
<div class="cart animated fadeIn wow"><img class="image" src="/projects/arch/image1.jpg">
<div class="middle">
<div class="text"><a href="">Подробнее</a></div>
</div>
</div>
<div class="cart animated fadeIn wow"><img class="image" src="/projects/arch/image2.jpg">
<div class="middle">
<div class="text"><a href="">Подробнее</a></div>
</div>
</div>
<div class="cart animated fadeIn wow"><img class="image" src="/projects/arch/image3.jpg">
<div class="middle">
<div class="text"><a href="">Подробнее</a></div>
</div>
</div>
<div class="cart animated fadeIn wow"><img class="image" src="/projects/arch/image4.jpg">
<div class="middle">
<div class="text"><a href="">Подробнее</a></div>
</div>
</div>
<a href="/arch/works"><div class="cartmore animated fadeIn wow"><p>Все примеры</p></div></a>
<h2 class="formh animated fadeIn wow">Связаться со мной:</h2>
<form class="animated fadeIn wow" action="/projects/arch/send.php">
<input type="text" placeholder="Имя" name="name " required>
<input type="email" placeholder="Почта" name="mail" required>
<textarea placeholder="Сообщение" name="message" required></textarea>
<button type="submit" class="formbutton">Отправить</button></form>
<footer>
<p>Контакты:</p>
<a class="sociala" href="https://www.facebook.com/sushkoevgen#_=_"><i class="fab fa-facebook fa-2x"></i></a>
<a class="sociala" href="https://www.behance.net/EugenSushko#_=_"><i class="fab fa-behance fa-2x"></i></a>
<p><a href="tel:+380976509295">+380976509295</a></p>
<p><a href="mailto:sushkoevgen@gmail.com">sushkoevgen@gmail.com</a></p>
<p>&#169; 2020 <span>Sushko Arhitects</span></p>
</footer>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/projects/arch/scrollto.js"></script>
<script>
$(function(){
  $('a[href^="#"]').on('click', function(event) {
    event.preventDefault();
    var sc = $(this).attr("href"),
        dn = $(sc).offset().top;
    $('html, body').animate({scrollTop: dn}, 1000);
  });
}); 
var needheight = screen.height / 5.71875;
$(window).scroll(function () {
        $(".hello").css({
            'opacity': 1 - (($(this).scrollTop()) / needheight)

        });
        if ($(this).scrollTop() > needheight) {
            $(".hello").css({
                'z-index': -1
            })
        } else {
            $(".hello").css({
                'z-index': 9999
            })
        }
    });
$(".hello").css({
'z-index':9999
        });
$(document).ready(function(){

    /**
     * This part causes smooth scrolling using scrollto.js
     * We target all a tags inside the nav, and apply the scrollto.js to it.
     */
    $("a.scrollto").click(function(evn){
        evn.preventDefault();
        $('html,body').scrollTo(this.hash, this.hash); 
    });

    /**
     * This part handles the highlighting functionality.
     * We use the scroll functionality again, some array creation and 
     * manipulation, class adding and class removing, and conditional testing
     */
    var aChildren = $("nav li").children(); // find the a children of the list items
    var aArray = []; // create the empty aArray
    for (var i=0; i < aChildren.length; i++) {    
        var aChild = aChildren[i];
        var ahref = $(aChild).attr('href');
        aArray.push(ahref);
    } // this for loop fills the aArray with attribute href values

    $(window).scroll(function(){
        var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
        var windowHeight = $(window).height(); // get the height of the window
        var docHeight = $(document).height();

        for (var i=0; i < aArray.length; i++) {
            var theID = aArray[i];
            var divPos = $(theID).offset().top; // get the offset of the div from the top of page
            var divHeight = $(theID).height(); // get the height of the div in question
            if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                $("a[href='" + theID + "']").addClass("nav-active");
            } else {
                $("a[href='" + theID + "']").removeClass("nav-active");
            }
        }

        if(windowPos + windowHeight == docHeight) {
            if (!$("nav li:last-child a").hasClass("nav-active")) {
                var navActiveCurrent = $(".nav-active").attr("href");
                $("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
                $("nav li:last-child a").addClass("nav-active");
            }
        }
    });
});
'use strict';

function setupIcons() {
  const lightSchemeIcon = document.querySelector('link#light-scheme-icon');
  const darkSchemeIcon = document.querySelector('link#dark-scheme-icon');
  
  function setLight() {
    document.head.append(lightSchemeIcon);
    darkSchemeIcon.remove();
  }

  function setDark() {
    lightSchemeIcon.remove();
    document.head.append(darkSchemeIcon);
  }


  const matcher = window.matchMedia('(prefers-color-scheme:dark)');
  function onUpdate() {
    if (matcher.matches) {
      setDark();
    } else {
      setLight();
    }
  }
  matcher.addListener(onUpdate);
  onUpdate();
}

setupIcons();
$(document).ready(function () {
    $('input[type="submit"]').attr('disabled', true);
    $('input[type="text"],input[type="email"],textarea').on('keyup', function () {
        var textarea_value = $('input[type="email"]').val();
var textarea_valuee = $('textarea').val();
        var text_value = $('input[type="text"]').val();
        if (textarea_value != '' &&  textarea_valuee != '' && text_value != '') {
            $('input[type="submit"]').attr('disabled', false);
        } else {
            $('input[type="submit"]').attr('disabled', true);
        }
    });
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
	</body>
</html>