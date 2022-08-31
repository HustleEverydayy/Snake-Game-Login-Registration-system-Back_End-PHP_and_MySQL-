<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
include("connect.php");
$account = $_POST['account'];
$passowrd = $_POST['password'];

$sql = "SELECT * FROM user where account = '$account'";
$result =$dbconnect->query($sql);
$row = mysqli_fetch_row($result);
if($account != null && $passowrd != null && $row[0] == $account && $row[1] == $passowrd) {
    $_SESSION['account']  = $row[0];
    $_SESSION['password'] = $row[1];
    $_SESSION['name']     = $row[2];
    $_SESSION['day']      = $row[3];
    $_SESSION['gender']   = $row[4];
    header('welcome.php');
    header('modify.php');
    header('modify_run.php');
    header('index.php');
    echo '登入成功!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=welcome.php>';
    $sql = "SELECT * FROM user where account = '$account'";
    $result =$dbconnect->query($sql);
    $row = mysqli_fetch_row($result);

} else {
    echo '登入失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
}
 mysqli_close($dbconnect);
?>