<?php
if($id=="")
{
    $noidung_thongbao = "Chưa có id xóa";
}
else if(is_numeric($id)==false)
{
    $noidung_thongbao = "id phải là số";
}
else
{
    $ketqua = $sanpham->Xoa($id);
    if($ketqua==FALSE)
        $noidung_thongbao ="Lỗi xóa sản phẩm";
    else   
        $noidung_thongbao ="Xóa thành công";
}
include("../Views/vThongbao.php"); 
?>
