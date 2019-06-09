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
        <link rel="stylesheet" href="css/page10.css">
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
            <div id="back"></div>
            <div id="home"></div>
            <div id="minimize"></div>
        </div>

        <script>
            $(document).ready(function () {
                $("#back").click(function () {
                    window.location.replace("page8.php");
                });
                $("#home").click(function () {
                    window.location.replace("page6.php");
                });
            });
        </script>
    </body>
</html>
