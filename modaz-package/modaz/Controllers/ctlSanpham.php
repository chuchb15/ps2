<?php
//đây là controller chỉnh của module quản lý sản phẩm
require_once("../Models/clsSanpham.php");
//lấy request act(them/sua/xoa/xulythem/xulysua) và id là mã của bản ghi cần sửa/xóa
$act = isset($_REQUEST["act"])?$_REQUEST["act"]:"";
$id = isset($_REQUEST["id"])?$_REQUEST["id"]:"";
//các biến chứa nội dùng cần hiển thị ở thông báo
$tieude_thongbao= "Quản lý sản phẩm";
$noidung_thongbao = "";
$link_thongbao ="ctlSanpham.php";

//tạo đối tượng sanpham  từ Models
$sanpham = new clsSanpham();
//xử lý $cmd để gọi controller cấp 2 (thêm, sửa xóa) hoặc các view danh sách, form thêm, form sửa
if($act=="them") //hiển thị form thêm sản phẩm
{
    require("../Views/vThemSP.php");
}
else if($act=="xulythem")
{
    require("xuly_themsp.php");
}
else if($act=="sua")
{
    $ketqua = $sanpham->TimSanphamTheoID($id);
    require("../Views/vSuaSP.php");
}
else if($act=="xulysua")
{
    require("xuly_suasp.php");
}
else if($act=="xoa")
{
    require("xuly_xoasp.php");
}
else//$act không có hoặc khác các giá trị trên thì hiển thị danh sách sản phẩm
{
    $ketqua = $sanpham->LayDSSanpham();
    require("../Views/vDanhsachSP.php");
}
?>