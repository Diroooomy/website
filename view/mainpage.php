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
        <span  style="width:90px;height:80px;">
            <button class="logo" onclick="document.querySelector('#welcome').scrollIntoView({block:'start',behavior:'smooth'})"></button>
        </span>
        <span  style="width:90px;height:80px;">
            
            <button class="home" onclick="document.querySelector('#home').scrollIntoView({block:'start',behavior:'smooth'})"></button></a>
        </span>
        <span  style="width:90px;height:80px;">
            
            <button class="message"></button></a>
        </span>
        <span  style="width:7%;height:80px;float:right;">
            <button class="open" onclick="openNav()"></button>
        </span>
    </div>
    <div class="welcome">
        <a id="welcome"></a>
        <div style="height:100px; width:100%"></div>
        <div>
            <span style="width:8%;height:800px;float:left;position:fixed">
                <div style="height: 400px;"></div>
                <button class="info" style="border:none;outline:none;transition:0.75s;height:30px;width:30px; margin: 10px auto 10px 30px;background:url(../image/qq.svg) no-repeat center center;" onclick="openNav()"></button>
                <button class="info" style="border:none;outline:none;transition:0.75s;height:30px;width:30px; margin: 10px auto 10px 30px;background:url(../image/wechat.svg) no-repeat center center;" onclick="openNav()"></button>
                <button class="info" style="border:none;outline:none;transition:0.75s;height:30px;width:30px; margin: 10px auto 10px 30px;background:url(../image/redgithub.svg) no-repeat center center;" onclick="openNav()"></button>
            </span>
            <span>
                <p class="slogan1">Welcome!</p>
                <p class="slogan2">Visitor  No.<?php echo ''.VisitorController::getMaxID();?></p>
            </span>
        </div>  
    </div>
    <div class="content1">
        <a id="home"></a>
        <div style="height: 90px; width:100%;"></div>
        <div>
            <p>你好，</p>
            <p>我是<?php ?></p>
        </div>
    </div>
    <div class="content2"></div>
    



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
    

    

</body>

</html>