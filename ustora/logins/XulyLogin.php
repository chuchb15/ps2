<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Xử lý đăng nhập</title>
</head>

<body>
<h2> Xử lý đăng nhập</h2>
<?php
session_start();
require("Database.php");
$user = $_REQUEST["tUser"];
$pass = $_REQUEST["tPassword"];
$row = CheckLogin($user,$pass);
if($row!=NULL)//thành công
{
	$_SESSION["logined"] = "OK";//khởi tạo biến SESSION để kiểm tra đăng nhập
	$_SESSION["user"] = $row["username"];//lấy giá trị cột fullname
	$_SESSION["fullname"]=$row["fullname"];//lấy giá trị cột fullname
	echo "<h3> ĐĂNG NHẬP THÀNH CÔNG</h3>";
	echo "<a href=\"Admin.php\"> Vào Trang Admin</a>";
}
else
{
	$_SESSION["logined"] = "";
	echo "<h3> ĐĂNG NHẬP SAI TÀI KHOẢN</h3>";
	echo "<a href=\"login2.php\"> Mời Đăng nhập</a>";
}
?>
</body>
</html>