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
        <link rel="stylesheet" href="css/page2.css">
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
                <h2>Выберите несколько пунктов, что вас больше интересует в поездке?</h2>
                <div id='seq1' class='ellipse'><img src="images/main/ellipse_small_1.png" alt=""/></div>
                <div id='seq2' class='ellipse'><img src="images/main/ellipse_small_2.png" alt=""/></div>
                <div id='seq3' class='ellipse'><img src="images/main/ellipse_small_3.png" alt=""/></div>
                <div id='seq4' class='ellipse'><img src="images/main/ellipse_small_4.png" alt=""/></div>
                <div id='seq5' class='ellipse'><img src="images/main/ellipse_small_5.png" alt=""/></div>
                <div id='seq6' class='ellipse'><img src="images/main/ellipse_small_6.png" alt=""/></div>
                <div id='seq7' class='ellipse'><img src="images/main/ellipse_small_7.png" alt=""/></div>
                <div id='seq8' class='ellipse'><img src="images/main/ellipse_small_8.png" alt=""/></div>
                <div id='seq9' class='ellipse'><img src="images/main/ellipse_small_9.png" alt=""/></div>
                <div id='seq10' class='ellipse'><img src="images/main/ellipse_small_10.png" alt=""/></div>
                <div id='seq11' class='ellipse'><img src="images/main/ellipse_small_11.png" alt=""/></div>
                <div id='seq12' class='ellipse'><img src="images/main/ellipse_small_12.png" alt=""/></div>
                <div id='seq13' class='ellipse'><img src="images/main/ellipse_small_13.png" alt=""/></div>
                <div id='seq14' class='ellipse'><img src="images/main/ellipse_small_14.png" alt=""/></div>
                <div id='seq15' class='ellipse'><img src="images/main/ellipse_small_15.png" alt=""/></div>
                <div id='seq16' class='ellipse'><img src="images/main/ellipse_small_16.png" alt=""/></div>
                <div id='seq17' class='ellipse'><img src="images/main/ellipse_small_17.png" alt=""/></div>
                <div id='seq18' class='ellipse'><img src="images/main/ellipse_small_18.png" alt=""/></div>
                <div id='seq19' class='ellipse'><img src="images/main/ellipse_small_19.png" alt=""/></div>
                <div id='seq20' class='ellipse'><img src="images/main/ellipse_small_20.png" alt=""/></div>
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
                    window.location.replace("page3.php");
                }

                $('#main').on("swiperight", swiperightHandler);

                // Callback function references the event target and adds the 'swiperight' class to it
                function swiperightHandler(event) {
                    window.location.replace("page1.php");
                }
            });
        </script>
    </body>
</html>
