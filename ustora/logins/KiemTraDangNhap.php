<?php
//nếu chưa có biến $_SESSION["logined"] thì cho như chưa đăng nhập
if(isset($_SESSION["logined"])==false || $_SESSION["logined"]=="")
{
?>
	<h3 style="color:red"> BẠN CHƯA ĐĂNG NHẬP</h3>
    <a href="Login2.php"> MỜI ĐĂNG NHẬP</a>
<?php
	die("<h2>Kết thúc</h2>");
}
?>