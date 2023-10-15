<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Đăng xuất</title>
</head>
<body>
<?php
session_start();
unset($_SESSION["logined"]);//Hủy biến $_SESSION["logined"]
//hoặc hủy toàn bộ các biến SESISON
session_destroy();
?>
<h3> ĐÃ ĐĂNG XUẤT </h3>
<a href="Admin.php"> Trở về trang admin</a>
</body>
</html>