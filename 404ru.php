<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link rel="icon" href="/qicon.svg" sizes="any" type="image/svg+xml" id="light-scheme-icon">
<link rel="icon" href="/qicondark.svg" sizes="any" type="image/svg+xml" id="dark-scheme-icon">
<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1">
<link rel="stylesheet" href="/app.css?v=<?=filemtime($_SERVER['DOCUMENT_ROOT'] . '/app.css')?>"> 
<title>Не найдено - Владислав Губарев | веб-разработчик, дизайнер</title>
<meta name="theme-color" content="#0278ff">
<script data-name="BMC-Widget" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="vladoss" data-description="Поддержите мои проекты:" data-message="Ты можешь купить мне чашечку кофе!" data-color="#0278ff" data-position="" data-x_margin="18" data-y_margin="18"></script>
<style>
.mainh{
margin-top:75px;
}
.logo{
    cursor:pointer;
}
</style>
</head>
<body>
		<nav><div class="navcontent">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <a href="/ru"><label class="logo"><img alt="Логотип" src="/mybrand.svg"></label></a>
      <ul>
<li><a href="/ru"><b>Главная</b></a></li>
<li><a href="/ru/history"><b>История</b></a></li>
<li><a href="/ru/blog"><b>Блог</b></a></li>
</ul></div>
</nav><div class="page-content">
<h2 class="mainh">Не найдено</h2></div>
<footer class="staticf">
<div class="contacts">
<a target="_blank" rel="noopener noreferrer" class="text-grey-lightest" href="https://twitter.com/gubarev_dev"><i class="fab fa-twitter-square fa-2x"></i></a>
<a target="_blank" rel="noopener noreferrer" class="fa-2x" href="https://instagram.com/gubarev.official"><i class="fab fa-instagram"></i></a>
<a target="_blank" rel="noopener noreferrer" class="fa-2x" href="https://github.com/Vladislav959"><i class="fab fa-github-square"></i></a>
<a target="_blank" rel="noopener noreferrer" class="fa-2x medium" href="https://dev.to/vla_doss"><i class="fab fa-dev"></i></a>
<a target="_blank" rel="noopener noreferrer" class="fa-2x" href="https://dribbble.com/vla_doss"><i class="fab fa-dribbble-square"></i></a>
</div><div class="cont"><b><span style="margin-left:40px">+7 (916) 932-18-82</span></b>
<b><span>mail@gubarev.site</span></b>
<b><span>© 2020 Владислав Губарев</span></b></div>
</footer>
<footer class="mobilef">
<div class="contacts">
<a target="_blank" rel="noopener noreferrer" class="text-grey-lightest" href="https://twitter.com/gubarev_dev"><i class="fab fa-twitter-square fa-2x"></i></a>
<a target="_blank" rel="noopener noreferrer" class="fa-2x" href="https://instagram.com/gubarev.official"><i class="fab fa-instagram"></i></a>
<a target="_blank" rel="noopener noreferrer" class="fa-2x" href="https://github.com/Vladislav959"><i class="fab fa-github-square"></i></a>
<a target="_blank" rel="noopener noreferrer" class="fa-2x medium" href="https://dev.to/vla_doss"><i class="fab fa-dev"></i></a>
<a target="_blank" rel="noopener noreferrer" class="fa-2x" href="https://dribbble.com/vla_doss"><i class="fab fa-dribbble-square"></i></a>
</div><p>+7 (916) 932-18-82</p>
<p>mail@gubarev.site</p>
<p>© 2020 Владислав Губарев</p>
</footer>

<script>
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
</script>
</body>
</html>