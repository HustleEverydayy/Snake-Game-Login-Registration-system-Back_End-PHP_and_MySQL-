<?php
session_start();
$acc = $_SESSION['account'];
$pas = $_SESSION['password'];
$nam = $_SESSION['name'];
$da = $_SESSION['day'];
$gen = $_SESSION['gender'];
?>
<html>
 <head><title></title>
  </head>
  <body>
    <div>
    <p><input type="button" name="play" value="回首頁" style="width:280px;height:50px;position:relative;font-size: 24px;"onclick="location.href='welcome.php'"></p>
    </div>
    <div>
      <table border="1">
        <tr>
        <th>account</th>
        <th>password</th>
        <th>name</th>
        <th>day</th>
        <th>gender</th>
        <th>score</th>
        </tr>
        <tr>
        <?php
        try{
          $pdo= new PDO("mysql:host=localhost;dbname=test;port=3306;charset:utf8",'abc123','11111111');
          $pdo->query("set names utf8");
          echo "以下表格是資料庫取出來並做出的表格";
        }catch (PDOException $e){
          echo   "連接失敗：".$e->getMessage();
        }
        $statement=$pdo->query("
             select account,password,name,day,gender,score from user
          ");
        while(list($acc,$pas,$nam,$da,$gen,$score1)=$statement->fetch(PDO::FETCH_NUM))
        {
          echo  '<tr><td>'.$acc.'</td>';//注意php變數要加上". 變數 ."
          echo   '<td>'.$pas.'</td>';
          echo   '<td>'.$nam.'</td>';
          echo   '<td>'.$da.'</td>';
          echo   '<td>'.$gen.'</td>';
          echo   '<td>'.$score1.'</td></tr>';
        }
        ?>
        </tr>
      </table>
    </div>
  </body>
</html>