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
                    <div class="categories">
                        <div class="categories_header"><h2>Категории</h2></div>
                        <div class="categories_content"><ul>
                            <a href="#"><li>Категория</li></a>
                            <a href="#"><li>Категория</li></a>
                            <a href="#"><li>Категория</li></a>
                            <a href="#"><li>Категория</li></a>
                            <a href="#"><li>Категория</li></a>
                            <a href="#"><li>Категория</li></a>
                            <a href="#"><li>Категория</li></a>
                            <a href="#"><li>Категория</li></a>
                            <a href="#"><li>Категория</li></a>
                            <a href="#"><li>Категория</li></a>
                            
                        </ul></div>
                    </div>
                    <section class="content-dop">
                    <div class="advantages">
                        <div class="advantage">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="612px" height="612px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
<g>
	<path d="M305.016,224.064v252.192l200.778-38.103V315.277c0-5.144,4.48-9.139,9.59-8.553l24.701,3.822
		c4.346,0.499,7.627,4.178,7.627,8.553v142.748c0,4.058-2.833,7.564-6.8,8.417l-219.787,47.258
		c-10.621,2.283-21.604,2.308-32.235,0.072L71.462,471.859c-3.902-0.82-6.73-4.214-6.834-8.201l-3.756-144.974
		c-0.118-4.547,3.322-8.4,7.852-8.798l184.692-16.229c3.203-0.281,5.982-2.325,7.207-5.297l27.824-67.573
		C292.037,212.067,305.016,214.635,305.016,224.064z M58.783,141.494L0.825,265.38c-2.832,6.054,2.014,12.885,8.663,12.213
		L227.149,255.6c3.076-0.311,5.749-2.247,7.003-5.073l70.035-157.78L65.026,136.675C62.289,137.178,59.963,138.973,58.783,141.494z
		 M304.188,92.747l74.106,162.712c1.295,2.844,4.029,4.762,7.145,5.013l217.25,17.471c6.547,0.526,11.248-6.178,8.522-12.154
		l-56.658-124.212c-1.172-2.569-3.528-4.399-6.308-4.9L304.188,92.747z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
Доставка
                        </div>
                        <div class="advantage">
                            <svg xmlns="http://www.w3.org/2000/svg" height="512pt" version="1.1" viewBox="-38 0 512 512.00142" width="512pt">
<g id="surface1">
<path fill="white" d="M 435.488281 138.917969 L 435.472656 138.519531 C 435.25 133.601562 435.101562 128.398438 435.011719 122.609375 C 434.59375 94.378906 412.152344 71.027344 383.917969 69.449219 C 325.050781 66.164062 279.511719 46.96875 240.601562 9.042969 L 240.269531 8.726562 C 227.578125 -2.910156 208.433594 -2.910156 195.738281 8.726562 L 195.40625 9.042969 C 156.496094 46.96875 110.957031 66.164062 52.089844 69.453125 C 23.859375 71.027344 1.414062 94.378906 0.996094 122.613281 C 0.910156 128.363281 0.757812 133.566406 0.535156 138.519531 L 0.511719 139.445312 C -0.632812 199.472656 -2.054688 274.179688 22.9375 341.988281 C 36.679688 379.277344 57.492188 411.691406 84.792969 438.335938 C 115.886719 468.679688 156.613281 492.769531 205.839844 509.933594 C 207.441406 510.492188 209.105469 510.945312 210.800781 511.285156 C 213.191406 511.761719 215.597656 512 218.003906 512 C 220.410156 512 222.820312 511.761719 225.207031 511.285156 C 226.902344 510.945312 228.578125 510.488281 230.1875 509.925781 C 279.355469 492.730469 320.039062 468.628906 351.105469 438.289062 C 378.394531 411.636719 399.207031 379.214844 412.960938 341.917969 C 438.046875 273.90625 436.628906 199.058594 435.488281 138.917969 Z M 384.773438 331.523438 C 358.414062 402.992188 304.605469 452.074219 220.273438 481.566406 C 219.972656 481.667969 219.652344 481.757812 219.320312 481.824219 C 218.449219 481.996094 217.5625 481.996094 216.679688 481.820312 C 216.351562 481.753906 216.03125 481.667969 215.734375 481.566406 C 131.3125 452.128906 77.46875 403.074219 51.128906 331.601562 C 28.09375 269.097656 29.398438 200.519531 30.550781 140.019531 L 30.558594 139.683594 C 30.792969 134.484375 30.949219 129.039062 31.035156 123.054688 C 31.222656 110.519531 41.207031 100.148438 53.765625 99.449219 C 87.078125 97.589844 116.34375 91.152344 143.234375 79.769531 C 170.089844 68.402344 193.941406 52.378906 216.144531 30.785156 C 217.273438 29.832031 218.738281 29.828125 219.863281 30.785156 C 242.070312 52.378906 265.921875 68.402344 292.773438 79.769531 C 319.664062 91.152344 348.929688 97.589844 382.246094 99.449219 C 394.804688 100.148438 404.789062 110.519531 404.972656 123.058594 C 405.0625 129.074219 405.21875 134.519531 405.453125 139.683594 C 406.601562 200.253906 407.875 268.886719 384.773438 331.523438 Z M 384.773438 331.523438 " />
<path d="M 217.996094 128.410156 C 147.636719 128.410156 90.398438 185.652344 90.398438 256.007812 C 90.398438 326.367188 147.636719 383.609375 217.996094 383.609375 C 288.351562 383.609375 345.59375 326.367188 345.59375 256.007812 C 345.59375 185.652344 288.351562 128.410156 217.996094 128.410156 Z M 217.996094 353.5625 C 164.203125 353.5625 120.441406 309.800781 120.441406 256.007812 C 120.441406 202.214844 164.203125 158.453125 217.996094 158.453125 C 271.785156 158.453125 315.546875 202.214844 315.546875 256.007812 C 315.546875 309.800781 271.785156 353.5625 217.996094 353.5625 Z M 217.996094 353.5625 " />
<path d="M 254.667969 216.394531 L 195.402344 275.660156 L 179.316406 259.574219 C 173.449219 253.707031 163.9375 253.707031 158.070312 259.574219 C 152.207031 265.441406 152.207031 274.953125 158.070312 280.816406 L 184.78125 307.527344 C 187.714844 310.460938 191.558594 311.925781 195.402344 311.925781 C 199.246094 311.925781 203.089844 310.460938 206.023438 307.527344 L 275.914062 237.636719 C 281.777344 231.769531 281.777344 222.257812 275.914062 216.394531 C 270.046875 210.523438 260.535156 210.523438 254.667969 216.394531 Z M 254.667969 216.394531 " />
</g>
</svg>
Безопасность
                        </div>
                        <div class="advantage">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<g>
			<path d="M391.84,48.87l54.306,45.287c3.739,3.119,8.281,4.641,12.798,4.641c5.729,0,11.415-2.448,15.371-7.191
				c7.074-8.483,5.932-21.095-2.552-28.169L417.457,18.15c-8.481-7.074-21.094-5.933-28.169,2.551
				C382.214,29.184,383.356,41.795,391.84,48.87z"/>
			<path d="M53.057,98.797c4.516,0,9.059-1.522,12.798-4.641L120.16,48.87c8.483-7.074,9.626-19.686,2.552-28.169
				c-7.073-8.482-19.686-9.625-28.169-2.551L40.237,63.437c-8.483,7.074-9.626,19.686-2.552,28.169
				C41.642,96.349,47.328,98.797,53.057,98.797z"/>
			<path d="M422.877,109.123C383.051,69.297,331.494,45.474,276,40.847V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v20.847
				c-55.494,4.627-107.051,28.449-146.877,68.275C44.548,153.697,20,212.962,20,276s24.548,122.303,69.123,166.877
				C133.697,487.452,192.962,512,256,512c50.754,0,99.118-15.869,139.864-45.894c8.893-6.552,10.789-19.072,4.237-27.965
				c-6.553-8.894-19.074-10.789-27.966-4.237C338.313,458.827,298.154,472,256,472c-108.075,0-196-87.925-196-196S147.925,80,256,80
				s196,87.925,196,196c0,33.01-8.354,65.638-24.161,94.356c-5.326,9.677-1.799,21.839,7.878,27.165
				c9.674,5.324,21.838,1.8,27.165-7.878C481.931,355.032,492,315.735,492,276C492,212.962,467.452,153.697,422.877,109.123z"/>
			<path d="M353.434,155.601c-8.584-6.947-21.178-5.622-28.128,2.965l-63.061,77.925C260.209,236.17,258.124,236,256,236
				c-22.056,0-40,17.944-40,40c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40c0-5.052-0.951-9.884-2.668-14.338l63.067-77.933
				C363.348,175.142,362.021,162.548,353.434,155.601z"/>
		</g>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
Быстрота
                        </div>
                        <div class="advantage">
                            <svg id="Layer_1" enable-background="new 0 0 507.246 507.246" height="512" viewBox="0 0 507.246 507.246" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m457.262 89.821c-2.734-35.285-32.298-63.165-68.271-63.165h-320.491c-37.771 0-68.5 30.729-68.5 68.5v316.934c0 37.771 30.729 68.5 68.5 68.5h370.247c37.771 0 68.5-30.729 68.5-68.5v-256.333c-.001-31.354-21.184-57.836-49.985-65.936zm-388.762-31.165h320.492c17.414 0 32.008 12.261 35.629 28.602h-356.121c-13.411 0-25.924 3.889-36.5 10.577v-2.679c0-20.126 16.374-36.5 36.5-36.5zm370.246 389.934h-370.246c-20.126 0-36.5-16.374-36.5-36.5v-256.333c0-20.126 16.374-36.5 36.5-36.5h370.247c20.126 0 36.5 16.374 36.5 36.5v55.838h-102.026c-40.43 0-73.322 32.893-73.322 73.323s32.893 73.323 73.322 73.323h102.025v53.849c0 20.126-16.374 36.5-36.5 36.5zm36.5-122.349h-102.025c-22.785 0-41.322-18.537-41.322-41.323s18.537-41.323 41.322-41.323h102.025z"/></svg>
                            Оплата картами и наличными
                        </div>
                    </div></section><section class="content">
                        <h2 class="items_h2">Товары:</h2>
                    <div class="items">
                   <div class="item">
                       <p class="item_available">В наличии</p>
                       <div class="item_img"><img src="shop.jpg"></div>
                       <p class="item_name">Товар, компания, модель</p>
                       <p class="item_price">400 руб.</p>
                       <button class="item_cart"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve"><g><g><g><path d="M128,341.333c-23.573,0-42.453,19.093-42.453,42.667s18.88,42.667,42.453,42.667c23.573,0,42.667-19.093,42.667-42.667
				S151.573,341.333,128,341.333z"/><path d="M151.467,234.667H310.4c16,0,29.973-8.853,37.333-21.973L424,74.24c1.707-2.987,2.667-6.507,2.667-10.24
				c0-11.84-9.6-21.333-21.333-21.333H89.92L69.653,0H0v42.667h42.667L119.36,204.48l-28.8,52.267
				c-3.307,6.187-5.227,13.12-5.227,20.587C85.333,300.907,104.427,320,128,320h256v-42.667H137.067
				c-2.987,0-5.333-2.347-5.333-5.333c0-0.96,0.213-1.813,0.64-2.56L151.467,234.667z"/><path d="M341.333,341.333c-23.573,0-42.453,19.093-42.453,42.667s18.88,42.667,42.453,42.667
				C364.907,426.667,384,407.573,384,384S364.907,341.333,341.333,341.333z"/></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
В корзину</button>
                       
                   </div>
                   <div class="item">
                       <p class="item_not_available">Нет в наличии</p>
                       <div class="item_img"><img src="shop.jpg"></div>
                       <p class="item_name">Товар, компания, модель</p>
                       <p class="item_price"><strike>800</strike> 300 руб.</p>
                       <button class="item_cart"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve"><g><g><g><path d="M128,341.333c-23.573,0-42.453,19.093-42.453,42.667s18.88,42.667,42.453,42.667c23.573,0,42.667-19.093,42.667-42.667
				S151.573,341.333,128,341.333z"/><path d="M151.467,234.667H310.4c16,0,29.973-8.853,37.333-21.973L424,74.24c1.707-2.987,2.667-6.507,2.667-10.24
				c0-11.84-9.6-21.333-21.333-21.333H89.92L69.653,0H0v42.667h42.667L119.36,204.48l-28.8,52.267
				c-3.307,6.187-5.227,13.12-5.227,20.587C85.333,300.907,104.427,320,128,320h256v-42.667H137.067
				c-2.987,0-5.333-2.347-5.333-5.333c0-0.96,0.213-1.813,0.64-2.56L151.467,234.667z"/><path d="M341.333,341.333c-23.573,0-42.453,19.093-42.453,42.667s18.88,42.667,42.453,42.667
				C364.907,426.667,384,407.573,384,384S364.907,341.333,341.333,341.333z"/></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
В корзину</button>
                       
                   </div>
                   <div class="item">
                       <p class="item_available">В наличии</p>
                       <div class="item_img"><img src="shop.jpg"></div>
                       <p class="item_name">Товар, компания, модель</p>
                       <p class="item_price">600 руб.</p>
                       <button class="item_cart"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve"><g><g><g><path d="M128,341.333c-23.573,0-42.453,19.093-42.453,42.667s18.88,42.667,42.453,42.667c23.573,0,42.667-19.093,42.667-42.667
				S151.573,341.333,128,341.333z"/><path d="M151.467,234.667H310.4c16,0,29.973-8.853,37.333-21.973L424,74.24c1.707-2.987,2.667-6.507,2.667-10.24
				c0-11.84-9.6-21.333-21.333-21.333H89.92L69.653,0H0v42.667h42.667L119.36,204.48l-28.8,52.267
				c-3.307,6.187-5.227,13.12-5.227,20.587C85.333,300.907,104.427,320,128,320h256v-42.667H137.067
				c-2.987,0-5.333-2.347-5.333-5.333c0-0.96,0.213-1.813,0.64-2.56L151.467,234.667z"/><path d="M341.333,341.333c-23.573,0-42.453,19.093-42.453,42.667s18.88,42.667,42.453,42.667
				C364.907,426.667,384,407.573,384,384S364.907,341.333,341.333,341.333z"/></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
В корзину</button>
                       
                   </div>
                   </div>
                   </section>
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