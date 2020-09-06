<?php
include "../controller/VisitorController.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web </title>
    <script src="../js/jump.js"></script>
    <script src="../js/sidebar.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body class="background">
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.21.0/prism.min.js"></script>
    <script src="../js/vsclick.min.js"></script>
    <script src="../js/fullscreen.js"></script>
    <script>
        let drop4 = new VsClick({
            dom: 'drop4',
            timer: 3000,
            spring: true,
            height: 5,
            width: 5
        })
    </script>
    <div class="list">
        <span style="float: left;">
            <input type="image" src="../image/logo.png" style="height:80px;outline:none;cursor:default;">
        </span>
        <span  style="width:90px;height:80px;">
            <button style="height: 80px;width:120px;margin:0;border:none;" onclick="openNav()"></button>
        </span>
        <span  style="width:90px;height:80px;">
            <button style="height:80px;width:120px;margin:0;border:none;background: url(../image/person.svg) no-repeat center center;" onclick="openNav()"></button>
        </span>
        <span  style="width:7%;height:80px;float:right;">
            <button class="open" onclick="openNav()"></button>
        </span>
    </div>

    <!--侧栏页面设计-->
    <div id="mySidenav" class="sidenav">
        <div class="sidebar">
            <div class="person" "></div>
            <div class="music" onclick="jumptoMusic()"></div>
            <div class="game" onclick="jumptoGame()"></div>
            <div class="movie" onclick="jumptoMovie()"></div>
            <div class="back" onclick="closeNav()"></div>
            <div class="fullscreen">
                <button onclick="launchFullscreen(document.documentElement); "></button>  
            </div>
        </div>
    </div>
    <div class="welcome">
        <p class="pa" style="font-family: Arial, Helvetica, sans-serif; font-size:x-large">Welcome</p>
        <a class="ax">我的第<?php echo ''.VisitorController::getMaxID();?>位访客</p>
    </div>

    

</body>

</html>