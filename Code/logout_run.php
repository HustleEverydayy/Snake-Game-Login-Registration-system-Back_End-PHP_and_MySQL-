<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
session_destroy();
echo "<script type='text/javascript'>";
echo "alert('η»εΊζε');";
echo "location.href='index.html';";
echo "</script>";
?>