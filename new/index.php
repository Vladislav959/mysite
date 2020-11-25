<!doctype html>
<html>
    <head>
        <title>SocialGrid</title>
    </head>
    <body>
        <style>
        @font-face{
            font-family:'Muli';
            src:url('poppins.ttf');
        }
        *{
            box-sizing:border-box;
        }
        body{
            margin:0;
            font-family:'Muli';
            padding:0;
        }
            header{
               padding:15px 24px;
               height:80px;
            }
            .logo{
                float:left;
                background:#7260e6;
                width:50px;
                height:50px;
                border-radius:8px;
            }
            .logo_name{
                line-height:50px;
                margin:0;
                float:left;
/*                color:#245382;*/
                margin-left:10px;
                font-size:1.2em;
            }
            ::selection, ::-moz-selection{
                background:#7260e6;
            }
            .header_links{
                float:right;
                margin-right:5vw;
            }
            .header_links a{
                text-decoration:none;
                color:black;
                margin:0;
                margin-left:10px;
                line-height:50px;
                transition:color .3s ease-in;
            }
            .header_links a:hover,.header_links a:focus{
                color:#7260e6;
            }
        </style>
        <header>
            <div class="logo"></div>
            <p class="logo_name">SocialGrid</p>
            <div class="header_links"><a href="#">Home</a><a href="#">Get started</a></div>
        </header>
    </body>
</html>