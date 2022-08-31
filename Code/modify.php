<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!DOCTYPE html>
<html lang="zh-TW">
    <head>
        <meta charset="utf-8">
        <meta http-equiv=""> 
        <title>修改個人資料</title>
        <style type="text/css">
            #mid{
                 width:500px;
                 height:500px;
                 position:absolute;
                 left:50%;
                 top:35%;
                 margin:-250px 0 0 -250px
             }
            #register {
                text-align: center;
                font-size:30px;
                margin: auto;
                position: absolute;
                top: 0px;
                width:500px;
                height:650px;
                padding: 18px 6% 0px 6%;
                background: rgb(247, 247, 247);
                border: 1px solid rgba(147, 184, 189, 0.8);
                box-shadow: 0pt 2px 5px rgba(105, 108, 109, 0.7),
                        0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
                border-radius: 5px;
                opacity: 0.9;
            }
        </style>
    </head>

    <body style="background-image: url(modify.gif);"></body>
        <form action="modify_run.php" method="POST" >
            <div id=mid> <div id=register>
            <h2>修改個人資料</h2>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <p>密碼: <input type="password" name="password" placeholder=""   style="width:250px;height:50px;font-size: 24px;"></p>
                <p>名稱: <input type="text"     name="name"     placeholder="<?php echo $_SESSION['name']; ?>"   style="width:250px;height:50px;font-size: 24px;"></p>
                <p>性別: <input type="text"     name="gender"   placeholder="<?php echo $_SESSION['gender']; ?>"   style="width:250px;height:50px;font-size: 24px;"></p>
                <p><input type="submit" name="button" value="確定"  style="width:140px;height:50px;font-size: 24px;"></p>
                <a href='./welcome.php'>回主頁</a>
            </div></div>
    </form>
</html>