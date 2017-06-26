<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <style>
        @keyframes leaves {
            0% {
                transform: scale(1.0);
            }
            100% {
                transform: scale(1.6);
            }
        }

        body {
            background-color: #ac2520;
        }
        h1 {
            font-family: 'Gloria Hallelujah', cursive;
            font-size: 160px;
            /*text-shadow: 6px 6px 0px rgba(0,0,0,0.2);*/
            color: #fcfcfc;
            text-shadow: 0 1px 0 #ccc,
            0 2px 0 #c9c9c9,
            0 3px 0 #bbb,
            0 4px 0 #b9b9b9,
            0 5px 0 #aaa,
            0 6px 1px rgba(0,0,0,.1),
            0 0 5px rgba(0,0,0,.1),
            0 1px 3px rgba(0,0,0,.3),
            0 3px 5px rgba(0,0,0,.2),
            0 5px 10px rgba(0,0,0,.25),
            0 10px 10px rgba(0,0,0,.2),
            0 20px 20px rgba(0,0,0,.15);
            text-align: center;
            letter-spacing: 7px;
            margin-top: 10px;
            margin-bottom: 0px;
        }

        .youtube-wrapper {
            width: 60%;
            margin: 0 auto;
            border: 1px solid #fff;
            overflow: hidden;
        }

        iframe {
            width: 100%;
            height: 400px;
        }


        .heart {
            background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/9632/heart.png");
            background-size: 100%;
            background-repeat: no-repeat;
            display: inline-block;
            position: relative;
            height: 50px;
            width: 50px;
            top: 10px;
            animation: leaves 1s ease-in-out infinite alternate;
            -webkit-animation: leaves 1s ease-in-out infinite alternate;

        }

        /*.heart {*/
            /*background-color: red;*/
            /*display: inline-block;*/
            /*height: 30px;*/
            /*margin: 0 10px;*/
            /*position: relative;*/
            /*top: 0;*/
            /*transform: rotate(-45deg);*/
            /*width: 30px;*/
            /*animation: leaves 5s ease-in-out infinite alternate;*/
            /*-webkit-animation: leaves 5s ease-in-out infinite alternate;*/

        /*}*/

        /*.heart:before,*/
        /*.heart:after {*/
            /*content: "";*/
            /*background-color: red;*/
            /*border-radius: 50%;*/
            /*height: 30px;*/
            /*position: absolute;*/
            /*width: 30px;*/
        /*}*/

        /*.heart:before {*/
            /*top: -15px;*/
            /*left: 0;*/
        /*}*/

        /*.heart:after {*/
            /*left: 15px;*/
            /*top: 0;*/
        /*}*/

        @import url(http://weloveiconfonts.com/api/?family=entypo);

        [class*="entypo-"]:before {
            font-family: 'entypo', sans-serif;
            color: red;
        }

        .love {
            color: #FFF;
            font-size: 80px;
            font-family: 'Gloria Hallelujah', cursive;
            position: absolute;
        }

        .love-1 {
            top: 40px;
            right: 0;
            transform: rotate(-40deg);
        }

        .love-2 {
            top: 40px;
            left: 0;
            transform: rotate(40deg);
        }

        .back-again {
            background-color: #FFF;
            padding: 20px;
            width: 60%;
            margin: 0 auto;
            margin-top: 100px;
            margin-bottom: 10px;
        }

        .back-again label {
            width: 20%;
            display: inline-block;
            font-weight: bold;
            color: #222;
            font-size: 14px;
            /*margin-right: 5px;*/
            box-sizing: border-box;
        }

        input[type="text"] {
            width: 50%;
            padding: 10px 4px;
            border: 1px solid #ccc;
            font-size: 18px;
            box-sizing: border-box;
        }

        button {
            display: inline-block;
            background: #ff0000;
            color: #FFF;
            border: none;
            padding: 12px 8px;
            cursor: pointer;
            font-size: 18px;
            box-sizing: border-box;
        }

        h2 {
            text-align: center;
            margin: 4px 0;
            font-size: 20px;
            color: #FFF;
        }


        @media only screen and (max-width: 700px) {
            h1 {
                font-size: 80px;
            }
            .love {
                font-size: 50px;
            }
            .love-1 {
                right: -20px;
            }
            .love-2 {
                left: -25px;
            }
            .youtube-wrapper {
                margin-top: 80px;
                width: 90%;
            }
        }

        @media only screen and (max-width: 500px) {
            h1 {
                font-size: 50px;
            }
            .love {
                font-size: 30px;
            }
            .love-1 {
                right: -10px;
                top: 65px;
            }
            .love-2 {
                left: -15px;
                top: 65px;
            }
            .youtube-wrapper {
                margin-top: 80px;
                width: 90%;
            }

            .back-again {
                width: 90%;
            }
        }


        div#heart_container div {
            color: #ff0000;
        }



    </style>
</head>
<body>
    <h1>OMNIA</h1>
    <p class="love love-1">I <span class="heart"></span> you</p>
    <p class="love love-2">I <span class="heart"></span> you</p>

    <div class="thanks">
        <?php if (isset($_GET['msg'])): ?>
            <h2>Thank You!</h2>
        <?php endif; ?>
    </div>

    <div class="back-again">
        <div class="form-group">
            <form action="again-prepare.php" method="post">
                <label for="back">Back Again: </label>
                <input type="text" placeholder="Type your answer" id="back" name="back_again">
                <button type="submit">Send</button>
            </form>
        </div>
    </div>

    <div class="youtube-wrapper">
        <iframe src="https://www.youtube.com/embed/66KaG-hxK70?autoplay=1" frameborder="0" allowfullscreen></iframe>
    </div>


    <script>
        (function () {
            "use strict";

            var num_of_hearts = 7;
            var driftX = 2; // each frame, drift left/right this much
            var driftY = 8;
            var update_speed = 100; // millisecond

            var heartTypes=["\u2764","\u2764","\u2764","\u2764","\u2764","\u2764","\u2764","\u2764","\u2764","\u2764","\u2764","\u2764","\u2764",
                "\u2764"];

            var viewportWidth = document.documentElement.clientWidth;
            var viewportHeight = document.documentElement.clientHeight;

            var viewSpaceWidth = Math.floor(viewportWidth* 1.1);
            var viewSpaceHeight = Math.floor(viewportHeight * 1.1);

            function randomInt(xmin,xmax) { return Math.floor( Math.random() * (xmax + 1 - xmin) + xmin ); }
            function randomReal(xmin,xmax) { return Math.random() * (xmax - xmin) + xmin ; }

            function randomColor() { return [randomInt(0,360),randomInt(70,100),randomInt(40,60),randomReal(.2,1)]; }

            function restartHeart(el) {
                el.innerHTML= heartTypes[Math.floor( Math.random() * heartTypes.length )];
                el.posX=randomInt(0, viewSpaceWidth);
                el.posY=-50;
                el.size= 20 * (1+Math.random());
                var rColor = randomColor();
//                el.style.color="red";
                el.style.left= el.posX + "px";
                el.style.top= el.posY + "px";
                el.style.fontSize = el.size + "px";}

            var heart_container = document.createElement("div");
            heart_container.setAttribute("id","heart_container");

            (function () { // create hearts
                var hearts = new Array(num_of_hearts);
                for (var i=0; i < hearts.length; i++) {
                    var el = document.createElement("div");
                    restartHeart(el);
                    el.style.position="fixed";
                    el.style.zIndex=i+100;
                    heart_container.appendChild(el);
                } })();

            document.body.appendChild(heart_container);

            var heartNodes = document.getElementById("heart_container").childNodes;

            function update_positions () {

                for (var i = 0; i < heartNodes.length; i++) {
                    var thisHeart = heartNodes[i];

                    thisHeart.posX += (function () {
                        var rnd = Math.random();
                        if ( rnd < 0.3333 ) {
                            return 0;
                        } else if ( rnd < 0.6666) {
                            return driftX;}
                        else {
                            return - driftX;
                        }
                    })();

                    thisHeart.posY = thisHeart.posY + ( (thisHeart.size/20) * (driftY) );

                    if ( thisHeart.posY > viewSpaceHeight ) {
                        restartHeart(thisHeart);
                    } else {
                        thisHeart.posY = thisHeart.posY % viewSpaceHeight; };

                    thisHeart.style.left = thisHeart.posX + "px";
                    thisHeart.style.top= thisHeart.posY + "px";
                }
            }

            setInterval( update_positions , update_speed);
        })();
    </script>

</body>
</html>
