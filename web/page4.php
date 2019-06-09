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
        <link rel="stylesheet" href="css/page4.css">
        <title></title>



        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <!--<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>-->
        <!--<script src="//code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.js"></script>-->

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    </head>
    <body>
        <!--<div style="background-image:url(images/step1.jpg); width:375px; height:812px;"></div>-->
        <!--<img src="images/step1.jpg" alt=""/>-->
        <div id="main">
            <h2>Укажите диапазон дат поездки</h2>

        </div>
        <div id='date'>
            <p>С: <input type="text" id="datepicker1" size="30"></p>
            <p>По: <input type="text" id="datepicker2" size="30">
        </div>
        <script>
            $(document).ready(function () {

                $('.ellipse').bind("tap", tapHandler);
                function tapHandler(event) {
                    $(event.target.parentElement).toggleClass('ellipsetap');
                }

                $("#datepicker1").datepicker();
                $("#anim").on("change", function () {
                    $("#datepicker1").datepicker("option", "showAnim", "clip");
                });

                $("#datepicker2").datepicker();
                $("#anim").on("change", function () {
                    $("#datepicker2").datepicker("option", "showAnim", "clip");
                });

                $("#main").click(function () {
                    window.location.replace("page5.php");
                });

            });
        </script>
    </body>
</html>
