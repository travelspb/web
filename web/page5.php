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
        <link rel="stylesheet" href="css/page5.css">
        <title></title>
        <!--<link rel="stylesheet" href="//code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.css">-->
        <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <!--<div style="background-image:url(images/step1.jpg); width:375px; height:812px;"></div>-->
        <!--<img src="images/step1.jpg" alt=""/>-->
        <div id="main">
            <div id="map"></div>
            <div id="points_map0"></div>
            <div id="points_map1"></div>
            <div id="points_map2"></div>
            <div id="points_map3"></div>
        </div>
        <div id="toolbar"></div>
        <script>
            $(document).ready(function () {
                $("#points_map0").delay(300).fadeIn("fast", function () {
                    $("#points_map1").delay(100).fadeIn("fast", function () {
                        $("#points_map2").delay(400).fadeIn("fast", function () {
                            $("#points_map3").delay(500).fadeIn("fast", function () {
                            });
                        });
                    });
                });


                $("#toolbar").click(function () {
                    window.location.replace("page6.php");
                });
            });
        </script>
    </body>
</html>
