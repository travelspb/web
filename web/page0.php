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
            <div id="gellipse_group">
                <h2>Сколько  путешественников?</h2>
                <div id='eq1' class='ellipse'><img src="images/main/ellipse01.png" alt=""/></div>
                <div id='eq2' class='ellipse'><img src="images/main/ellipse02.png" alt=""/></div>
                <div id='eq3' class='ellipse'><img src="images/main/ellipse03.png" alt=""/></div>
                <div id='eq4' class='ellipse'><img src="images/main/ellipse04.png" alt=""/></div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
//                if ($("#gellipse_group .ellipse").hasClass("ellipsetap"))
//                    $("#state").text("Партия содержит брак!");

                $('.ellipse').bind("tap", tapHandler);
                function tapHandler(event) {
                    $(event.target.parentElement).toggleClass('ellipsetap');
                }

                $('#main').on("swipeleft", swipeleftHandler);

                // Callback function references the event target and adds the 'swiperight' class to it
                function swipeleftHandler(event) {
                    window.location.replace("page1.php");
                }
            });
        </script>
    </body>
</html>
