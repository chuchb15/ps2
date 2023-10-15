<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
</head>
<body>
    <h1>danh sách sản phẩm</h1>
    <?php
    //sử dụng biến $ketqua và $sanpham đã có bên ctlSanpham.php
    if($ketqua==FALSE)
    {
        $noidung_thongbao = "Lỗi truy vấn CSDL";
        require_once("../Views/vThongbao.php");
        die();
    }
    $rows = $sanpham->data;//lấy mảng sản phẩm từ $data của lớp clsSanpham
    $n = count($rows);
    echo "<h3> có $n sản phẩm</h3>";
    ?>
    <h3><a href="?act=them">Thêm sản phẩm</a></h3>
    <table width=500 align="center" border="1">
        <tr style="font-weight: bold; background-color: yellow;">
            <td  width=10%>id</td>
            <td  width=30%>title</td>
            <td  width=20%>author</td>
            <td  width=20%>price</td>
            <td  width=20%>action</td>
        </tr>
        <?php
        foreach($rows as $row)
        {
        ?>
        <tr>
            <td><?=$row["id"]?></td>
            <td><?=$row["title"]?></td>
            <td><?=$row["author"]?></td>
            <td><?=$row["price"]?></td>
            <td>
                <a href="?act=sua&id=<?=$row["id"]?>">Sửa</a> 
                - 
                <a href="?act=xoa&id=<?=$row["id"]?>" onclick="return confirm('Chắc chắn xóa?')">Xóa</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>