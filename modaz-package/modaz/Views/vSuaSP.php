<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thêm sản phẩm</title>
</head>
<body>
    <h1> Sửa sản phẩm</h1>
    <?php
    if($id=="")
    {
        $noidung_thongbao = "Chưa có id sửa";
        require_once('vThongbao.php');
        die();
    }
    if(is_numeric($id)==false)
    {
        $noidung_thongbao = "id phải là số";
        require_once('vThongbao.php');
        die();
    }
    if($ketqua==FALSE)
    {
        $noidung_thongbao = "LỖI TRUY VẤN CSDL";
        require_once('vThongbao.php');
        die();
    }
    if($sanpham->data==NULL)
    {
        $noidung_thongbao = "không tìm thấy sản phẩm có id=$id";
        require_once('vThongbao.php');
        die();
    }
    $row = $sanpham->data;
    ?>
    <form name="form1" id="form1" method="post" action="?act=xulysua">
        <input type="hidden" name="id" value="<?=$id?>">
        <p>Tên sách:<input type="text" name="tensach" id="tensach" value="<?=$row["title"]?>"></p>
        <p>Tên tác giả:<input type="text" name="tacgia" id="tacgia"  value="<?=$row["author"]?>"></p>
        <p>Giá sách:<input type="text" name="gia" id="gia"  value="<?=$row["price"]?>"></p>
        <p><input type="submit" name="b1" id="b1" value="Đồng ý"></p>
    </form>
</body>
</html>