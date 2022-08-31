<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
include("connect.php");
$account  = $_SESSION['account'];
$password = $_POST['password'];
$name     = $_POST['name']; 
$gender   = $_POST['gender'];
$sql="SELECT * FROM user WHERE account = '$account'";
$result =$dbconnect->query($sql);
$row = mysqli_fetch_row($result);
if($password != null && $name != null && $gender != null && $row[0] == $account)
{  
    $sql = "UPDATE user SET password = '$password', name = '$name', gender = '$gender' WHERE account = '$account'";
    if($dbconnect->query($sql) === TRUE) {
        echo '新增成功!';
        echo "<meta http-equiv='REFRESH' CONTENT='2; url=welcome.php'>";
    } else {
        echo '新增失敗!';
        echo "<meta http-equiv='REFRESH' CONTENT='2; url=modify.php'>";
    }
} else {
    echo '請填寫完整!';
    echo '<meta http-equiv=REFRESH CONTENT=2; url=modify.php>';
}    
?>