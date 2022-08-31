<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!DOCTYPE html>
<html lang="zh-TW">
    <head>
        <meta charset="utf-8">
        <meta http-equiv=""> 
        <title>首頁</title>
        <style type="text/css">
            #mid{
                 width:500px;
                 height:500px;
                 position:absolute;
                 left:35%;
                 top:35%;
                 margin:-250px 0 0 -250px
             }
            #register1 {
                text-align: center;
                font-size:30px;
                margin: auto;
                top: 10px;
                width:1080px;
                height:760px;
                padding: 18px 6% 0px 6%;
                background: rgb(247, 247, 247);
                border: 1px solid rgba(147, 184, 189, 0.8);
                box-shadow: 0pt 2px 5px rgba(105, 108, 109, 0.7),
                        0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
                border-radius: 5px;
                opacity: 0.9;
            }
            #register2 {
                text-align: center;
                font-size:30px;
                margin: auto;
                position: absolute;
                left:110%;
                top:20%;
                width:450px;
                height:550px;
                padding: 18px 6% 0px 6%;
                background: rgb(247, 247, 247);
                border: 1px solid rgba(147, 184, 189, 0.8);
                box-shadow: 0pt 2px 5px rgba(105, 108, 109, 0.7),
                        0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
                border-radius: 5px;
                opacity: 0.7;
            }
        </style>
    </head>

    <body style="background-image: url(welcomegif.gif);"></body>
        <div id=mid> 
            <div id=register1>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <p><input type="button" name="play"    value="進入遊戲"     style="width:300px;height:100px;position:relative;right:300px;top:150px;font-size: 24px;"onclick="location.href='snakeindex.php'"></p>
            <p><input type="button" name="fix"     value="修改個人資料" style="width:300px;height:100px;position:relative;right:300px;top:150px;font-size: 24px;"onclick="location.href='modify.php'"></p>
            <p><input type="button" name="logout"  value="登出"        style="width:300px;height:100px;position:relative;right:300px;top:150px;font-size: 24px;"onclick="location.href='logout_run.php'"></p>
        </div>
            <div id=register2>
        <h1>個人資料</h1>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <p> </p>
            <p> </p>
            <p>玩家名稱: <td class="colLeft"> <?php echo $_SESSION['name']; ?></p>
            <p>註冊日期: <td class="colLeft"> <?php echo $_SESSION['day']; ?></p>
            <p>性別:     <td class="colLeft"> <?php echo $_SESSION['gender']; ?></p>
            </div></div>
    </body>
</html>