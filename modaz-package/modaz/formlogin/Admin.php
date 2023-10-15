<?PHP
session_start();
require("KiemTraDangNhap.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trang Admin - cần đăng nhập</title>
</head>

<body>
<h2> TRANG DÀNH CHO ADMIN</h2>
<h3> Username: <?=$_SESSION["user"]?> </h3>
<h3> Hello <?=$_SESSION["fullname"]?> </h3>
<a href="Logout.php"> ĐĂNG XUẤT</a>
</body>
</html>