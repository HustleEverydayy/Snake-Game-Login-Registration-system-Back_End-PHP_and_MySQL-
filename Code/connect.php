<?php
$db_host = "localhost";         # MySQL/MariaDB 伺服器
$db_user = "abc123";       # 使用者帳號
$db_pass = "11111111"; # 使用者密碼
$db_select = "test"; 



$dbconnect = new mysqli($db_host, $db_user, $db_pass, $db_select);
if ($dbconnect->connect_error) {
    die("連線失敗：" . $dbconnect->connect_error);
    }
?>