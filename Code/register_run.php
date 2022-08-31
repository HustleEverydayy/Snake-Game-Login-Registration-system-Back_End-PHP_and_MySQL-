<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
include("connect.php");
$account  = $_POST['account'];
$password = $_POST['password'];
$name     = $_POST['name'];
$today    = date("Y/n/j"); 
$gender   = $_POST['gender'];

$sql="SELECT * FROM `user` WHERE account = '$_POST[account]'";
global $dbconnect;
$result =$dbconnect->query($sql) or die('MySQL query error');
$row = mysqli_fetch_array($result);
if($row!=""){
    echo "<script type='text/javascript'>";
    echo "alert('已經辦過帳號或是此帳號已被註冊請換個帳號');";
    echo "location.href='register.html';";
    echo "</script>";
}else if($account != null && $password != null && $name != null && $gender != null)
{  
    $sql = "insert into user (account, password, name, day, gender) values ('$account', '$password', '$name', '$today', '$gender')";
    if($dbconnect->query($sql) === TRUE) {
        echo '新增成功!';
        echo "<meta http-equiv='REFRESH' CONTENT='2; url=index.html'>";
    } else {
        echo '新增失敗!';
        echo "<meta http-equiv='REFRESH' CONTENT='2; url=index.html'>";
    }
} else {
    echo '請填寫完整!';
    echo '<meta http-equiv=REFRESH CONTENT=2; url=register.html>';
}    
?>