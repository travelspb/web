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
        <link rel="stylesheet" href="css/page3.css">
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
            <div id='qecllipse'>
                <h2>Диапазон возраста участников поездки?</h2>
                <div id='seq1' class='ellipse'><img src="images/main/ellipse_small.png" alt=""/></div>
                <div id='seq2' class='ellipse'><img src="images/main/ellipse_small.png" alt=""/></div>
                <div id='seq3' class='ellipse'><img src="images/main/ellipse_small.png" alt=""/></div>
                <div id='seq4' class='ellipse'><img src="images/main/ellipse_small.png" alt=""/></div>
                <div id='seq5' class='ellipse'><img src="images/main/ellipse_small.png" alt=""/></div>
                <div id='seq6' class='ellipse'><img src="images/main/ellipse_small.png" alt=""/></div>
                <span id='label1'>5-14</span>
                <span id='label2'>14-18</span>
                <span id='label3'>18-27</span>
                <span id='label4'>27-35</span>
                <span id='label5'>35-45</span>
                <span id='label6'>45-60</span>
            </div>
        </div>
        <script>
            $(document).ready(function () {

                $('.ellipse').bind("tap", tapHandler);
                function tapHandler(event) {
                    $(event.target.parentElement).toggleClass('ellipsetap');
                }

                $('#main').on("swipeleft", swipeleftHandler);

                // Callback function references the event target and adds the 'swiperight' class to it
                function swipeleftHandler(event) {
                    window.location.replace("page4.php");
                }

                $('#main').on("swiperight", swiperightHandler);

                // Callback function references the event target and adds the 'swiperight' class to it
                function swiperightHandler(event) {
                    window.location.replace("page2.php");
                }

            });
        </script>
    </body>
</html>
