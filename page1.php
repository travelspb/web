<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <!--<meta name="viewport" content="width=375" />-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <link rel="stylesheet" href="css/main.css">
        <title></title>
        <link rel="stylesheet" href="//code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.css">
        <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="//code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <!--<div style="background-image:url(images/step1.jpg); width:375px; height:812px;"></div>-->
        <!--<img src="images/step1.jpg" alt=""/>-->
        <div id="main">
            <div>
                <h2>Первый раз в Санкт-Петербурге?</h2>
                <div id='eq1' class='ellipse ellipsetap'><img src="images/main/ellipse_yes.png" alt=""/></div>
                <div id='eq2' class='ellipse'><img src="images/main/ellipse_no.png" alt=""/></div>
            </div>
        </div>
        <script>
            $(function () {
                $('.ellipse').bind("tap", tapHandler);
                function tapHandler(event) {
                    //    $(event.target.parentElement).css({"opacity":"1"})
                    $('.ellipse').toggleClass('ellipsetap');
                    //$(event.target.parentElement).toggleClass('ellipsetap', 'ellipse');
                }

                $('#main').on("swipeleft", swipeleftHandler);

                // Callback function references the event target and adds the 'swiperight' class to it
                function swipeleftHandler(event) {
                    window.location.replace("page2.php");
                }

                $('#main').on("swiperight", swiperightHandler);

                // Callback function references the event target and adds the 'swiperight' class to it
                function swiperightHandler(event) {
                    window.location.replace("page0.php");
                }
            });
        </script>
    </body>
</html>
