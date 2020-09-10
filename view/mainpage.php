<?php
require("../controller/VisitorController.php");
require("../controller/AdminController.php");
require("../controller/CommentController.php");
$ad=new AdminController();
$admin = $ad->index();
$com=new CommentController();

?>
<?php
if(isset($_POST['name']))
{
    $name = $_POST['name'];
    $vi = new VisitorController($name);
    $vi->store();
}
?>
<?php
if(isset($_POST['com']))
{
    $name=$_POST['visitor'];
    $content=$_POST['com'];
    $com->setComment($name,$content);
    $com->store();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web </title>
    <script src="../js/jump.js"></script>
    <script src="../js/sidebar.js"></script>
    <script src="../js/validate.js"></script>
    <script src="../js/vsclick.min.js"></script>
    <script src="../js/fullscreen.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body class="background">
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
            
            <button class="message" onclick="document.querySelector('#mail').scrollIntoView({block:'start',behavior:'smooth'})"></button></a>
        </span>
        <span  style="width:7%;height:80px;float:right;">
            <button class="open" onclick="openNav()"></button>
        </span>
    </div>
    <div class="welcome">
        <a id="welcome"></a>
        <div style="height:100px; width:100%"></div>
        <div>
            <span style="z-index:999999;width:8%;height:800px;float:left;position:fixed">
                <div style="height: 400px;"></div>
                <button class="info" style="border:none;outline:none;transition:0.75s;height:30px;width:30px; margin: 10px auto 10px 30px;background:url(../image/qq.svg) no-repeat center center;" onclick="window.location.href='https://home.cnblogs.com/u/2150786/';"></button>
                <button class="info" style="border:none;outline:none;transition:0.75s;height:30px;width:30px; margin: 10px auto 10px 30px;background:url(../image/wechat.svg) no-repeat center center;" onclick="window.location.href='https://i.csdn.net/#/uc/profile';"></button>
                <button class="info" style="border:none;outline:none;transition:0.75s;height:30px;width:30px; margin: 10px auto 10px 30px;background:url(../image/redgithub.svg) no-repeat center center;" onclick="window.location.href='https://github.com/Diroooomy/website';"></button>
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
            <p style="padding-left:120px; user-select:none;font-size:50px;color:azure;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Personal Introduction</p>
        </div>
        <div>
            <p style="font-family:'Courier New', Courier, monospace, sans-serif;font-size:50px;margin-top:25px;margin-left:300px;">Hello,</p>
            <p style="font-family:Georgia, 'Times New Roman', Times, serif;font-size:50px;margin-top:25px;margin-left:500px;">I am <?php echo $admin['enname']; ?></p>
        </div>
    </div>
    <div class="content2">
        <p style="font-family:Georgia, 'Times New Roman', Times, serif;font-size:30px;margin-top:25px;margin-left:380px;">You can get to know me through this exquisite card</p>
        <div class="card">
            <div style="height: 60%;width:100%;">
                <span style="height: 100%;width:60%;float:left;">
                    <input type="image" src="../image/school_logo.png" style="cursor:default; width:400px; user-select:none;outline:none;margin-left: 10px;margin-top:15px;">
                    <div style=" margin-left:120px;">
                        <p class="my" style="font-size:37px;"><?php echo $admin['name']; ?>&nbsp;&nbsp;<?php echo $admin['enname']; ?></p>
                        <p class="my">学工号 : <?php echo $admin['number']; ?></p>
                        <p class="my">学&nbsp;&nbsp;院 : <?php echo $admin['college']; ?></p>
                        <p class="my">专&nbsp;&nbsp;业 : <?php echo $admin['major']; ?></p>
                        <p class="my">爱&nbsp;&nbsp;好 : <?php for($i=0;$i<count($admin['hobby']);$i++) echo $admin['hobby'][$i].' '; ?></p>
                    </div>
                </span>
                <span>
                    <img src="../image/myself.jpg" style="outline:none;cursor:default; width: 210px;margin-left:10%;margin-top:100px;border-radius:25px;">
                </span>
            </div>
            <div>
                <a></a>
            </div>
        </div>
    </div>
    <div>
    <div id="message">
        <a id="mail"></a>
        <div style="height: 90px;width:100%;"></div>
        <p style="font-family: SimSun;font-size:26px;font-weight:bold;margin-left:20%;">留言板:</p>
        <div class="recent-messages">
            <?php $result=$com->index();
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div><header style="vertical-align:middle;"><img class="comment-img" src="../image/user.svg"><h3 class="comment-name" style="margin-left:20px;">'.$row['name'] .'</h3></header>';
                    echo '<div class="comment">'.$row['content'].'</div></div>';
                }
            } ?>
        </div>
        <p style=" font-family: SimSun;font-size:26px;font-weight:bold;margin-left:29%;">写新留言:</p>
        <div class="leave-m">
            <form name="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validate();">
            <input type="hidden" name="visitor" value="<?php echo $name; ?>">
            <textarea name="com" id="com" placeholder="有什么想对我说的？畅所欲言吧"></textarea>
            <div >
            <p style="margin-left:20%;margin-right:25%;font-family: SimSun;color:gainsboro;">
            留言会公开显示，请勿在留言内容写下微信号等私人联系方式，谨防诈骗。如果你不想发布公开留言，也可以发送邮件到 <?php echo $admin['e_mail']; ?>与我联系。</p>
                <input type="submit" value="完成" class="submit" >
            </div>
            </form>
        </div> 
        <div style="width:20%;margin:0 auto;margin-top:14%">
            <a style=" color:azure; font-family: Georgia, 'Times New Roman', Times, serif;">Designed and developed by Helen</a>
        </div>
    </div>
    </div>



    <!--侧栏页面设计-->
    <div id="mySidenav" class="sidenav">
        <div class="sidebar">
            <div class="person"></div>
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
