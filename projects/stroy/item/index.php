<!doctype html>
<html>
    <head>
       
        <title>Строй-Комфорт</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
    *, *:before, *:after {
  box-sizing: border-box;
}
    :focus{
        outline:none;
    }
    @font-face{
        font-family:'Open Sans';
        src:url('opensans.ttf');
    }
    ::selection{
        color:white;
        background:#c4010c;
    }
        body{
            margin:0;
            font-family:'Open Sans';
            font-size:1em;
        }
        a{
            text-decoration:none;
        }
        h1,h2,h3,h4,h5{
            font-family:'Open Sans';
        }
        header{
            margin-left:calc((100% - 1100px ) / 2);
            margin-right:calc((100% - 1100px ) / 2);
            height:fit-content;
            background:white;
            display: flex;
            align-items: center;
            margin-top:15px;
            padding-top:15px;
        }
        header .header_logo{
            float:left;
            width:200px;
            clear:both;
        }
        header .header_logo img{
            width:200px;
        }
        .cart-counter, .want-list{
            float:right;
            margin-right:25px;
        }
        .cart-counter svg, .want-list svg{
            width:30px;
            height:30px;
        }
        .cart-counter svg path, .want-list svg path{
            fill:#c4010c;
        }
        .cart-counter_counter, .want-list_counter{
            width:auto;
            height:30px;
        }
        .cart-counter-icon:hover .cart-counter svg path, .cart-counter-icon:focus .cart-counter svg path{
            fill:#ff2e3a!important;
        }
        .cart-counter_counter, .want-list_counter{
            font-size:1.6em;
           
        }
        .cart-counter_counter svg, .want-list_counter svg{
            vertical-align:-0.1675em;
        }
        
        section.page{
            float:none;
            clear:both;
            width:1100px;
            height:auto;
            display:grid;
            grid-template-columns: 1fr 3fr;
    grid-template-areas: 
      "categories contentdop"
      "content content";
            margin:auto;
            margin-top:30px;
        }
        .pre-header{
            background:#c4010c;
            width:100%;
            height: 55px;
    padding: 10px 15px;
    line-height: 35px;
        }
        .pre-header .pre-header_links a{
            color:white;
            margin:0;
            margin-left:12px;
        }
        .pre-header .pre-header_links a:hover{
            text-decoration:underline;
            text-decoration-color:white;
        }
        .pre-header_links{
            float:left;
            margin-left:105px;
        }
        .pre-header_sign{
            float:right;
            margin-right:105px;
        }
        .pre-header .pre-header_sign a{
            color:white;
            margin:0;
            margin-right:12px;
        }
        header .header_search{
     float:left;
             
            margin-left:100px;
        }
        header .header_search input[type="search"]{
          
            background:white;
            border:2.15px solid #c4010c;
            padding:10px;
            width:250px;
            color:black;
        }
        header .header_search input[type="search"]::-webkit-search-cancel-button, header .header_search input[type="search"]::-ms-clear{
            background:white;
        }
        .header_search input[type="search"]::placeholder, .header_search input[type="search"]:placeholder, .header_search input[type="search"]::-webkit-input-placeholder, .header_search input[type="search"]::-ms-input-placeholder, .header_search input[type="search"]:-ms-input-placeholder, .header_search input[type="search"]::-moz-input-placeholder, .header_search input[type="search"]:-moz-input-placeholder{
            color:white;
        }
        .header_counters{
            float:right;
            margin-left: auto;
  margin-right:0px;
            
        }
        .header_phone{
             float:right;
             margin-left: auto;
            margin-right:100px;
        }
        .header_phone button{
           
            border:2.15px solid #c4010c;
            background:white;
            display: inline-block;
            padding:7px 5px;
        }
        .header_phone button svg{
            width:25px;
            height:25px;
            display: inline-block;
   vertical-align: middle;
   margin-top: -2.5px;
        }
        .header_phone button svg path{
            fill:#c4010c;
        }
    .categories{
        height:fit-content;
        width:220px;
        grid-area: categories;
        box-shadow:0 4px 6px rgba(0,0,0,.1);
    }
    .categories_header{
        width:100%;
        padding:10px 15px;
        background:#c4010c;
    }
    .categories_header h2{
        color:white;
        margin:0;
        font-size:1.2em;
    }
    .categories_content{
        padding:14px;
    }
    .categories_content ul{
        list-style-type:none;
        margin-left:-35px;
        
    }
    .categories_content ul li{
        color:#646464;
        transition:color .3s ease-in;
        margin-bottom:15px;
    }
    .categories_content ul li:hover, .categories_content ul li:focus{
        color:black;
    }
    .categories_content ul a{
       transition:color .3s ease-in;
    }
    .categories_content ul a:hover, .categories_content ul a:focus{
        text-decoration:underline;
        text-decoration-color:black;
    }
    .item_available{
        color:#08a608;
        margin:0;
        margin-top:15px;
        font-size:1.05em;
    }
    .item_not_available{
        color:#e12828;
        margin:0;
        margin-top:15px;
        font-size:1.05em;
    }
    .item_cart{
        width:100%;
        background:#c4010c;
        color:white;
        font-size:1.1em;
        border:none;
        transition:all .25s ease-in-out;
        padding:12px;
    }
    .item_cart:hover{
        background:#ff000e;
        
    }
    .item_cart svg{
        width:25px;
        height:25px;
        vertical-align:-0.35em;
        margin-right:7px;
    }
    .item_cart svg path{
        fill:white;
    }
    .item{
     width:240px;   
     padding:15px;
     margin-bottom:32px;
     margin-right:30px;
     margin-left:0;
     margin-top:0px!important;
     border:1px solid #ddd7d7;
    }
    .item_name{
        margin:0;
        margin-top:10px;
        margin-bottom:10px;
    }
    .item_price{
        font-size:1.45em;
        margin:0;
        margin-bottom:15px;
        
        font-weight:bold;
    }
    .items{
        display:flex;
            margin-top: 20px;
    margin-left: 5px;
        flex-direction:row;
        flex-wrap:wrap;
    }
    .advantages{
        padding:13px;
        display:flex;
        margin-left:20px;
        justify-content: space-between;
        background:#c4010c;
    }
    .advantage{
        color:white;
    }
    .advantage svg{
        width:28px;
        margin-right:3px;
        height:28px;
        vertical-align: -0.5em;
    }
    .advantage svg path{
        fill: rgb(255 255 255);
    }
    .content-dop{
        grid-area: contentdop;
    }
    footer{
        background:#fafafa;
width:100%;
        margin:0;
        padding:20px 12px;
    }
    .sticky{
        position:fixed;
        top:0;
        margin-left:0;
        width:100%;
        height:fit-content;
        padding-top:15px;
        padding-bottom:15px;
        padding-left:calc((100% - 1100px ) / 2);
        padding-right:calc((100% - 1100px ) / 2);
        margin-top:0;
    }
    .content{
        grid-area: content;
    }
    .items_h2{
        margin:0;
        padding:0;
        margin-top:30px;
    }
    @media(max-width:1166px){
        section.page{
            width:1000px;
        }
        header{
            margin-left:calc((100% - 1000px ) / 2);
            margin-right:calc((100% - 1000px ) / 2);
        }
        .sticky{
            padding-left:calc((100% - 1000px ) / 2);
        padding-right:calc((100% - 1000px ) / 2);
        }
        .header_search{
            margin-left:40px!important;
        }
        .header_counters{
            margin-left:0;
        }
        .header_phone{
            margin-right:40px;
        }
    }
    @media(max-width:1120px){
    section.page{
        width:860px;
    }
    header{
        margin-left:calc((100% - 860px ) / 2);
            margin-right:calc((100% - 860px ) / 2);
    }
    .sticky{
       padding-left:calc((100% - 860px ) / 2);
        padding-right:calc((100% - 860px ) / 2);
    }
    }
    @media(max-width:960px){
        section.page{
        width:740px;
    }
    header{
        margin-left:calc((100% - 740px ) / 2);
            margin-right:calc((100% - 740px ) / 2);
    }
    .sticky{
       padding-left:calc((100% - 740px ) / 2);
        padding-right:calc((100% - 740px ) / 2);
    }
    }
    </style>
    </head>
    <body>
        <div class="pre-header"><div class="pre-header_links"><a href="">Ссылка 1</a><a href="">Ссылка 1</a><a href="">Ссылка 1</a><a href="">Ссылка 1</a></div><div class="pre-header_sign"><a href="">Вход</a><a href="#" style="cursor:default">/</a><a href="">Регистрация</a></div></div>
        <header>
            
            <div class="header_logo"><img src="logo.png"></div>
            <div class="header_search">
                <input type="search" placeholder="Поиск, например: грунтовки">
            </div>
            <div class="header_phone">
                <button class="header_phone_button"><span>Заказать звонок</span><svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="48.000000pt" height="48.000000pt" viewBox="0 0 48.000000 48.000000"
 preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,48.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M130 420 c-30 -30 -28 -128 5 -198 35 -76 82 -141 118 -163 92 -55
175 19 115 103 -19 28 -25 30 -64 24 -38 -5 -45 -2 -64 21 -33 42 -36 71 -10
98 19 20 22 32 17 65 -3 22 -11 47 -17 55 -18 22 -76 19 -100 -5z"/>
</g>
</svg>
</button>
            </div>
            <div class="header_counters"><div class="cart-counter">
                <span class="cart-counter_counter"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve"><g><g><g><path d="M128,341.333c-23.573,0-42.453,19.093-42.453,42.667s18.88,42.667,42.453,42.667c23.573,0,42.667-19.093,42.667-42.667
				S151.573,341.333,128,341.333z"/><path d="M151.467,234.667H310.4c16,0,29.973-8.853,37.333-21.973L424,74.24c1.707-2.987,2.667-6.507,2.667-10.24
				c0-11.84-9.6-21.333-21.333-21.333H89.92L69.653,0H0v42.667h42.667L119.36,204.48l-28.8,52.267
				c-3.307,6.187-5.227,13.12-5.227,20.587C85.333,300.907,104.427,320,128,320h256v-42.667H137.067
				c-2.987,0-5.333-2.347-5.333-5.333c0-0.96,0.213-1.813,0.64-2.56L151.467,234.667z"/><path d="M341.333,341.333c-23.573,0-42.453,19.093-42.453,42.667s18.88,42.667,42.453,42.667
				C364.907,426.667,384,407.573,384,384S364.907,341.333,341.333,341.333z"/></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
				4</span>
				
				</div>
				<div class="want-list">
				    <span class="want-list_counter">
               <svg viewBox="0 -10 511.98685 511" xmlns="http://www.w3.org/2000/svg"><path d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0" fill="#ffc107"/></svg>
				5</span>
				
				</div></div>
				       </header>
                <section class="page">
                    <div class="item_path"><p><a>Товары</a> / <a>Товар</a></p></div>
                    <div class="item_image"><img src="/projects/stroy/shop.jpg"></div>
                    
                </section>
             <footer>
                 <p>hslaf</p>
             </footer>
             <script>
                 window.onscroll = function() {myFunction()};

var header = document.querySelector("header");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
             </script>
    </body>
</html>