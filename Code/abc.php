<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("connect.php");
$score1 = $_POST["score1"];

$acc = $_SESSION['account'];
$pas = $_SESSION['password'];
$nam = $_SESSION['name'];
$da = $_SESSION['day'];
$gen = $_SESSION['gender'];

$sql = "SELECT * FROM user where account = '$acc'";
$result =$dbconnect->query($sql);
$row = mysqli_fetch_row($result);
if($acc != null && $row[0] == $acc ) {
    $sql = "UPDATE user set score = '$score1' WHERE account = '$acc'";
    if ($dbconnect->query($sql) === TRUE)
    {
      echo "成功更新資料庫<br/>";
    }else{
      echo "Error: " . $sql . "<br>" . $dbconnect->error;
    }
}

$dbconnect->close(); 
echo "<meta http-equiv='REFRESH' CONTENT='2; url=edf.php'>";
?>