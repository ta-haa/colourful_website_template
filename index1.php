<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

    <meta charset="”utf-8″">
    <meta name="theme-color" content="#ffffff" />
    <! SAYFA RENGİ >
    <meta name="keywords" content="taha keskin, youtube 5 taneden fazla girme" />
    <! ANAHTAR KELİME >
    <meta name="news_keywords" itemprop="keywords" content="5 taneden fazla girme" />
    <! ANAHTAR KELİME >
    <meta property="og:site_name" content="" />
    <! SİTE ADI >
    <meta name="twitter:site" content="@" />
    <! SİTE ADI >
    <meta name="generator" content="Optimist Hub" />
    <! SİTE ADI >
    <meta property="og:url" content="" />
    <! SİTE LİNKİ >
    <meta property="al:web:url" content="" />
    <! SİTE LİNKİ >
    <meta name="twitter:url" content="" />
    <! SİTE LİNKİ >
    <meta property="article:section_url" content="" />
    <! SİTE LİNKİ >
    <meta name="identifier-URL" content="" />
    <! SİTE LİNKİ >
    <meta property="article:publisher" content="" />
    <! SİTE LİNLİ >
    <meta property="og:title" content="" />
    <! SİTE AÇIKLAMA >
    <meta name="twitter:title" content="" />
    <! SİTE AÇIKLAMA >
    <meta property="og:description" content="" />
    <! SİTE AÇIKLAMA >
    <meta name="description" content="" />
    <! SİTE AÇIKLAMA >
    <meta name="twitter:description" content="" />
    <! SİTE AÇIKLAMA >
    <meta name="author" content="taha keskin" />
    <! KİM YAPTI >
    <meta property="article:author" content="taha keskin" />
    <! KİM YAPTI >
    <meta name="twitter:creator" content="@taha_keskin" />
    <! KİM YAPTI >
    <meta name="copyright" content="taha keskin" />
    <! TELİF HAKKI >
    <meta name="Abstract" content="" />
    <! SİTE ÖZETİ >
    <meta http-equiv="content-language" content="tr" />
    <! SİTE DİLİ >
    <meta property="og:locale" content="tr_TR" />
    <! KONUM >
    <meta property="og:type" content="article" />
    <! TÜRÜ >
    <meta property="og:type" content="website" />
    <! TÜRÜ >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <! SİTE MOBİL VE PC BOYUTU ORANLAR >
    <meta property="og:video:tag" content="" />
    <! VİDEO ADI >
    <meta name="og:image" content="" />
    <! SİTE RESMİ >
    <meta name="rating" content="general" />
    <! KİTLE >

    <title>Welcome</title>
    <link rel="shortcut icon" href="favicon32.ico" sizes="32x32" />
    <link rel="shortcut icon" href="favicon16.ico" sizes="32x32" />

    <script>
        console.log("----------------------")
        console.log("Welcome To My Website")
        console.log("----------------------")
    </script>
<!-- Noscript eğer javascript kapalıysa youtube kanala yönlendir -->
    <noscript>
        <meta http-equiv="refresh" content="0 ; url=https://www.youtube.com/@TahaKeskin">
    </noscript>
<!-- yağmur -->
    <script>
        function baslangic() {
            window.requestAnimFrame = (function () {
                return window.requestAnimationFrame ||
                    function (callback) {
                        window.setTimeout(callback, 1000 / 60);
                    };
            })();

            var canvas = document.getElementById("yagmur");
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight * 3;

            var c = canvas.getContext("2d"),
                genislik = canvas.width,
                yukseklik = canvas.height;

            var yagmur_number = 150,
                yagmur_array = [];

            function yagmur() {
                this.x = Math.random() * genislik;
                this.y = Math.random() * yukseklik;
                this.vector_x = Math.random() - 0.5 > 0 ? Math.random() : -Math.random();
                this.vector_y = Math.random() / 3;
                this.line_length = Math.random() * 50 + 20;
            }

            yagmur.prototype.update = function () {

                this.x += this.vector_x;
                this.y += this.vector_y * this.line_length;

                if (this.x > genislik || this.x < 0) {
                    this.x = Math.random() * genislik;
                }
                if (this.y > yukseklik) {
                    this.y = 0;
                }
            }

            function init() {
                c.fillStyle = "#1a1a1a";
                c.strokeStyle = "white";
                c.lineWidth = 3;
                for (var h = 0; h < yagmur_number; h++) {
                    yagmur_array.push(new yagmur())
                }
            }
            init();
            start();

            function start() {
                c.fillRect(0, 0, genislik, yukseklik,);
                for (var h = 0; h < yagmur_array.length; h++) {
                    c.beginPath();
                    c.moveTo(yagmur_array[h].x, yagmur_array[h].y);
                    c.lineTo(yagmur_array[h].x + yagmur_array[h].vector_x, yagmur_array[h].y + yagmur_array[h].vector_y * yagmur_array[h].line_length);

                    yagmur_array[h].update();
                    c.stroke();
                }
                window.requestAnimFrame(start);
            }
        }
    </script>
    <script>
        function boxlayeronmouse() {
            document.getElementById("yagmur").style.transform = "rotate(360deg)";

        }
        function boxlayeroutmouse() {
            document.getElementById("yagmur").style.transform = "rotate(180deg)";

        }

    </script>
    <script>
        setInterval("titletime ()", 1000)
        var time = 0;
        function titletime() {
            time++;
            if (time % 2 == 1) { document.title = "Welcome" }
            else { document.title = "My Website" }
        }
    </script>

    <script>
        setInterval("ok ()", 1000)
        function ok() {
            if (document.hasFocus()) { }
            else { document.title = "Come Back"; }
            ;
        }
    </script>

    <script>
        function aboutonmouse() { document.getElementById("about").style.display = "block" }
        function aboutoutmouse() { document.getElementById("about").style.display = "none" }

        function programonmouse() { document.getElementById("program").style.display = "block" }
        function programoutmouse() { document.getElementById("program").style.display = "none" }

        function courseonmouse() { document.getElementById("course").style.display = "block" }
        function courseoutmouse() { document.getElementById("course").style.display = "none" }

        function rewiesonmouse() { document.getElementById("rewies").style.display = "block" }
        function rewiesoutmouse() { document.getElementById("rewies").style.display = "none" }

        function blogonmouse() { document.getElementById("blog").style.display = "block" }
        function blogoutmouse() { document.getElementById("blog").style.display = "none" }




    </script>
    <script>
        function signinonmouse() {
            document.getElementById("register").style.left = "85%";
            document.getElementById("singin").style.left = "89%";
        }
        function signinoutmouse() {
            document.getElementById("register").style.left = "86.5%";
            document.getElementById("singin").style.left = "88%";
        }

        function registeronmouse() {
            document.getElementById("register").style.left = "85%";
            document.getElementById("singin").style.left = "89%";
        }
        function registeroutmouse() {
            document.getElementById("register").style.left = "86.5%";
            document.getElementById("singin").style.left = "88%";
        }
    </script>
    <script>
        function menui() {
            document.getElementById("li1").style.width = "320px";
            document.getElementById("li2").style.width = "300px";
            document.getElementById("li3").style.width = "280px"
        }
        function menud() {
            document.getElementById("li1").style.width = "170px";
            document.getElementById("li2").style.width = "170px";
            document.getElementById("li3").style.width = "170px"
        }
        function lii1() {
            document.getElementById("li1").style.width = "300px";
            document.getElementById("li2").style.width = "170px";
            document.getElementById("li3").style.width = "170px"
        }
        function lii2() {
            document.getElementById("li1").style.width = "170px";
            document.getElementById("li2").style.width = "300px";
            document.getElementById("li3").style.width = "170px";
        }
        function lii3() {
            document.getElementById("li1").style.width = "170px";
            document.getElementById("li2").style.width = "170px";
            document.getElementById("li3").style.width = "300px"
        }

    </script>
    <script>
        function clicksignin() {
            document.getElementById("signinpanel").style.display = "block";
        }
        function clickregister() {
            document.getElementById("loginpanel").style.display = "block";
        }

        function signinclose() {
            document.getElementById("signinpanel").style.display = "none";
        }

        function loginclose() {
            document.getElementById("loginpanel").style.display = "none";
        }



    </script>
    <style>
        * {
            background: linear-gradient(45deg,red,purple,cyan);
            margin: 0;
            padding: 0;
            background-size: 1000% 1000%;
            animation: bodyani 10s linear infinite;
            animation-direction: alternate
        }

        @keyframes bodyani {
            0% {
                background-position: 0%
            }

            100% {
                background-position: 100%
            }
        }

        .yagmur {
            width: 100%;
            height: 100%;
            position: fixed;
            left: 0;
            top: 0px;
            z-index: 0;
            opacity: 50%;
            transform:rotate(180deg);
        }

        header {
            width:;
            height:;
            position: fixed;
            left: 25%;
            top: 0;
            box-shadow: 5px 5px 15px black,-5px 0 15px black;
            z-index: 1
        }

            header ul a {
                color: white
            }

            header ul li {
                color: white;
                list-style: none;
                display: block;
                width: 150px;
                font: bold 15px comic sans ms;
                height: 65px;
                float: left;
                text-align: center;
                padding: 35px 0 0 0;
            }

                header ul li:hover {
                    filter: brightness(130%);
                    color: black
                }

                header ul li ul {
                    display: none;
                    position: relative;
                    top: 43px
                }

        .divlogin {
            transition: 1s;
            color: white;
            width: 100px;
            height: 65px;
            top: 2%;
            text-align: center;
            padding: 35px 0 0 0
        }

        .divsingin {
            z-index: 3;
            position: fixed;
            left: 88%;
            box-shadow: 5px 0px 10px black;
            border-radius: 0 65% 0 65%
        }

        .divregister {
            background: transparent;
            z-index: 2;
            position: fixed;
            left: 86.5%;
            box-shadow: -5px 0px 10px black;
            border-radius: 65% 0 65% 0
        }


        .boxlayer {
            position: fixed;
            left: 85%;
            top: 40%;
            width:;
            height:;
            transform: scale(0.7);
            background: transparent
        }

            .boxlayer:hover .boxcircle {
                margin: -20px 0 -20px 0;
                box-shadow: 10px 0 10px transparent,-10px 0 10px transparent;
                animation: layerani 2s linear infinite;
                animation-direction: alternate;
            }

            .boxlayer:hover .boxcore {
                opacity: 100%;
                filter: brightness(250%);
            }

        @keyframes layerani {
            0% {
                box-shadow: 10px 0 20px black
            }

            100% {
                box-shadow: 10px 0 50px black
            }
        }

        .boxcircle {
            width: 200px;
            height: 100px;
            background: transparent;
            z-index: 1;
            margin: -45px 0 -45px 0;
            box-shadow: 10px 0px 10px black;
            transition: 1s;
        }

        .boxcore {
            opacity: 70%;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            background: white;
            position: relative;
            left: 50px;
            z-index: -1
        }

        nav {
            width: 50%;
            height: 200px;
            position: relative;
            top: 40%;
            left: 25%;
            background: transparent
        }

            nav .navbigtext {
                color: transparent;
                -webkit-text-stroke: 2px white;
                font: bold 50px comic sans ms;
                background: transparent
            }

            nav .navsmalltext {
                color: white;
                font: bold 15px comic sans ms;
                background: transparent
            }


        .arrow {
            border-radius: 20%;
            text-align: center;
            color: cyan;
            font: bold 20px comic sans ms;
            animation: arrowonmouse 10s linear infinite;
            background: transparent;
            width: 30px;
            height: 30px;
            position: fixed;
            left: 7.5%;
            top: 80%;
            border-color: transparent;
            border-style: solid;
            border-width: 25px;
            box-shadow: 0 0 100px transparent,0 0 70px transparent,0 0 200px deepskyblue;
            text-shadow: 0 0 100px deepskyblue,0px 0 70px deepskyblue,0px 0 30px deepskyblue
        }

            .arrow:hover {
                border-radius: 20%;
                background: transparent;
                color: red;
                animation: arrowoutmouse 2s linear infinite;
                box-shadow: 0 0 100px transparent,0 0 70px transparent,0 0 200px red;
                text-shadow: 0 0 100px red,0 0 70px red,0 0 30px red
            }

        @keyframes arrowonmouse {
            0% {
                transform: rotate(180deg)
            }

            100% {
                transform: rotate(540deg)
            }
        }

        @keyframes arrowoutmouse {
            0% {
                transform: rotate(250deg)
            }

            100% {
                transform: rotate(600deg)
            }
        }
    </style>
    <style>
        .enterloginpanel {
            width: 25%;
            height: 450px;
            background-color: transparent;
            position: fixed;
            border: 5px solid red;
            left: 37%;
            top: 20%;
            z-index: 1;
            border-radius: 20px;
            text-align: center;
            display: none
        }

        .loginleave {
            width: 10px;
            height: 10px;
            border-radius: 5px;
            font: bold 50px comic sans ms;
            animation: inputani 2s linear infinite;
            border: 2px solid red
        }

        .logineposta {
            width: 250px;
            height: 60px;
            border: 5px solid red;
            background-color: transparent;
            border-radius: 1000px;
            text-align: center;
            font: bold 30px comic sans ms;
            outline-style: none;
            animation: inputani 1s linear infinite
        }

        .loginpassword {
            width: 250px;
            height: 60px;
            border: 5px solid red;
            background-color: transparent;
            border-radius: 1000px;
            text-align: center;
            font: bold 30px comic sans ms;
            outline-style: none;
            animation: inputani 2s linear infinite
        }

        .loginbutton {
            width: 200px;
            height: 60px;
            border: 5px solid red;
            background-color: transparent;
            border-radius: 1000px;
            font: bold 30px comic sans ms;
            animation: inputani 1s linear infinite
        }

        .loginclose {
            text-align: right;
            font: bold 40px comic sans ms;
            color: red;
            background: transparent;
            cursor: pointer
        }

        @keyframes inputani {
            0% {
                color: red
            }

            100% {
                color: cyan
            }
        }
    </style>
    <style>
        .signinpanel {
            width: 25%;
            height: 450px;
            background-color: transparent;
            position: fixed;
            border: 5px solid red;
            left: 37%;
            top: 20%;
            z-index: 1;
            border-radius: 20px;
            text-align: center;
            display: none
        }

        .signineposta {
            width: 250px;
            height: 60px;
            border: 5px solid red;
            background-color: transparent;
            border-radius: 1000px;
            text-align: center;
            font: bold 30px comic sans ms;
            outline-style: none;
            animation: inputani 1s linear infinite
        }

        .signinpassword {
            width: 250px;
            height: 60px;
            border: 5px solid red;
            background-color: transparent;
            border-radius: 1000px;
            text-align: center;
            font: bold 30px comic sans ms;
            outline-style: none;
            animation: inputani 2s linear infinite
        }

        .signinbutton {
            width: 200px;
            height: 60px;
            border: 5px solid red;
            background-color: transparent;
            border-radius: 1000px;
            font: bold 30px comic sans ms;
            animation: inputani 1s linear infinite
        }

        .signinclose {
            text-align: right;
            font: bold 40px comic sans ms;
            color: red;
            background: transparent;
            cursor: pointer
        }

        @keyframes inputani {
            0% {
                color: red
            }

            100% {
                color: cyan
            }
        }
    </style>
</head>
<body id="body" onload="baslangic ()">

    <a name="up"></a>

    <canvas id="yagmur" class="yagmur"></canvas>

    <header>

        <ul>
            <a href="#">
                <li onmouseover="aboutonmouse ()" onmouseout="aboutoutmouse ()">About

                    <ul id="about">
                        <li onmouseover="aboutaltonmouse ()" onmouseout="aboutaltoutmouse ()">About</li>
                    </ul>

                </li>
            </a>

            <a href="#">
                <li onmouseover="programonmouse ()" onmouseout="programoutmouse ()">Program

                    <ul id="program">
                        <li>Program</li>
                    </ul>

                </li>
            </a>
            <a href="#">
                <li onmouseover="courseonmouse ()" onmouseout="courseoutmouse ()">Course

                    <ul id="course">
                        <li>Course</li>
                    </ul>

                </li>
            </a>
            <a href="#">
                <li onmouseover="rewiesonmouse ()" onmouseout="rewiesoutmouse ()">Rewies

                    <ul id="rewies">
                        <li>Rewies</li>
                    </ul>

                </li>
            </a>
            <a href="#">
                <li onmouseover="blogonmouse ()" onmouseout="blogoutmouse ()">Blog

                    <ul id="blog">
                        <li>Blog</li>
                    </ul>

                </li>
            </a>
        </ul>

    </header>



    <div class="loginpanel">
        <a href="#">
            <div class="divlogin divregister" id="register" onmouseover="registeronmouse ()" onmouseout="registeroutmouse ()" onclick="clickregister()">Login</div>
        </a>
        <a href="#">
            <div class="divlogin divsingin" id="singin" onmouseover="signinonmouse ()" onmouseout="signinoutmouse ()" onclick="clicksignin()">Sing in</div>
        </a>
    </div>

    <form>
        <div class="enterloginpanel" id="loginpanel">
            <div class="loginclose" onclick="loginclose()">x &nbsp</div>
            <br />
            <br />
            <br />
            <br />
            <input class="logineposta" type="text">
            <br />
            <br />
            <input class="loginpassword" type="text">
            <br />
            <br />
              
<!-- captcha  -->

            <br />
            <br />
            <button class="loginbutton">Login</button>
        </div>
    </form>
    <form>
        <div class="signinpanel" id="signinpanel">
            <div class="signinclose" onclick="signinclose()">x &nbsp</div>
            <br />
            <br />
            <br />
            <br />
            <input class="signineposta" type="text">
            <br />
            <br />
            <input class="signinpassword" type="text">
            <br />
            <br />

            // captcha 

            <br />
            <br />
            <button class="signinbutton">Sign in</button>
        </div>
    </form>

   
    <nav>
        <div class="navbigtext">
        </div>


        <div class="navsmalltext">
            <span class="navbigtext">Lorem</span> ipsum dolor sit amet, consectetur adipiscing elit. Mauris viverra viverra bibendum. Cras scelerisque velit id <span class="navbigtext">vulputate</span> varius. Fusce dictum erat ac nibh iaculis efficitur. Quisque condimentum sit amet felis a convallis. <span class="navbigtext">Etiam</span> lobortis nunc nec egestas cursus. <span class="navbigtext">Curabitur</span> mollis finibus dignissim. Pellentesque in orci viverra, efficitur ligula vel, posuere leo. Sed a hendrerit massa, eget ullamcorper felis. <span class="navbigtext">Mauris</span> ac sem auctor, pellentesque <span class="navbigtext">quam</span> quis, sodales turpis.
            <span class="navbigtext">Lorem</span> ipsum dolor sit amet, consectetur adipiscing elit. Mauris viverra viverra bibendum. Cras scelerisque velit id <span class="navbigtext">vulputate</span> varius. Fusce dictum erat ac nibh iaculis efficitur. Quisque condimentum sit amet felis a convallis. <span class="navbigtext">Etiam</span> lobortis nunc nec egestas cursus. <span class="navbigtext">Curabitur</span> mollis finibus dignissim. Pellentesque in orci viverra, efficitur ligula vel, posuere leo. Sed a hendrerit massa, eget ullamcorper felis. <span class="navbigtext">Mauris</span> ac sem auctor, pellentesque <span class="navbigtext">quam</span> quis, sodales turpis.
            <span class="navbigtext">Lorem</span> ipsum dolor sit amet, consectetur adipiscing elit. Mauris viverra viverra bibendum. Cras scelerisque velit id <span class="navbigtext">vulputate</span> varius. Fusce dictum erat ac nibh iaculis efficitur. Quisque condimentum sit amet felis a convallis. <span class="navbigtext">Etiam</span> lobortis nunc nec egestas cursus. <span class="navbigtext">Curabitur</span> mollis finibus dignissim. Pellentesque in orci viverra, efficitur ligula vel, posuere leo. Sed a hendrerit massa, eget ullamcorper felis. <span class="navbigtext">Mauris</span> ac sem auctor, pellentesque <span class="navbigtext">quam</span> quis, sodales turpis.

        </div>
    </nav>

    <div class="boxlayer" onmouseover="boxlayeronmouse ()" onmouseout="boxlayeroutmouse ()">
        <a href="#">
            <div class="boxcircle" style="border-radius: 100px 100px 0 0"></div>
        </a>
        <a href="#">
            <div class="boxcore"></div>
        </a>
        <a href="#">
            <div class="boxcircle" style="border-radius: 0 0 100px 100px"></div>
        </a>
    </div>




    <a href="#up">
        <div class="arrow" style="">&#187</div>
    </a>

</body>
</html>
