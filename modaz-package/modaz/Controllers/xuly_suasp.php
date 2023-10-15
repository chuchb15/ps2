<?php
if(isset($_REQUEST["b1"])==false)
{
    $noidung_thongbao = "Chưa nhập thông tin";
}
else{
    //lấy thông tin từ form
    $id = $_REQUEST["id"];
    $tensach = $_REQUEST["tensach"];
    $tacgia = $_REQUEST["tacgia"];
    $gia = $_REQUEST["gia"];
    $ketqua = $sanpham->Sua($id,$tensach,$tacgia,$gia);
    if($ketqua==FALSE)
        $noidung_thongbao ="Lỗi sửa sản phẩm";
    else   
        $noidung_thongbao ="Sửa thành công";
}     
include("../Views/vThongbao.php");  
?>
