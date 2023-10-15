<?php
/*
lớp clsSanpham kế thừa từ clsDatabase:
- thừa hưởng thuộc tính $conn, $pdo_stm và hàm ThucthiSQL()
- Xây dựng thêm các hàm tìm kiếm, thêm, sửa, xóa tên bảng books
 */
require_once("clsDatabase.php");
class clsSanpham extends clsDatabase
{
    public $data = NULL;//để chứa mảng kết quả của SELECT 
    function __construct()
    {
        parent::__construct();//gọi hàm tạo của clsDatabase để kết nối CSDL
    }
    //xây dựng các hàm truy vấn, thêm, sửa, xóa
    //hàm lấy danh sách sẳn phẩm
    public function LayDSSanpham()
    {
        $sql = "SELECT * FROM books";
        $ketqua = $this->ThucthiSQL($sql);//gọi hàm ThucthiSQL() kế thừa từ lớp clsDatabase
        if($this->pdo_stm==TRUE)//thành công thì lưu các bản ghi kết quả vào $data
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;//TRUE/FALSE
    }
    public function TimSanphamTheoID($id)
    {
        $sql = "SELECT * FROM books WHERE id=?";
        $param = [$id];
        $ketqua = $this->ThucthiSQL($sql,$param);
        if($this->pdo_stm==TRUE)//thành công thì lưu bản ghi kết quả vào $data
            $this->data = $this->pdo_stm->fetch();//lấy 1 dòng kết quả lưu vào $data
        return $ketqua;//TRUE: OK/FALSE:LỖI SQL
    }
    public function TimSanphamTheoTitle($title) //$title="abc"
    {
        $sql = "SELECT * FROM books WHERE tittle LIKE ?";
        $title = "%$title%";
        $param = [$title];
        $ketqua = $this->ThucthiSQL($sql,$param);
        if($this->pdo_stm==TRUE)//thành công thì lưu bản ghi kết quả vào $data
            $this->data = $this->pdo_stm->fetch();//lấy 1 dòng kết quả lưu vào $data
        return $ketqua;//TRUE: OK/FALSE:LỖI SQL
    }
    //hàm thêm sản phẩm
    public function Them($title, $author, $price){
        $sql = "INSERT INTO books VALUES(NULL,?,?,?)";
        $param = [$title,$author,$price];
        $ketqua = $this->ThucthiSQL($sql, $param);
        return $ketqua;
    }
    //hàm sửa sản phẩm
    public function Sua($id,$title, $author, $price){
        $sql = "UPDATE books SET title=?, author=?, price=? WHERE id=?";
        $param = [$title,$author,$price,$id];
        $ketqua = $this->ThucthiSQL($sql, $param);
        return $ketqua;
    }
    //hàm xóa sản phẩm
    public function Xoa($id)
    {
        $sql = "DELETE FROM books WHERE id=?";
        $param = [$id];
        $ketqua = $this->ThucthiSQL($sql, $param);
        return $ketqua;
    }
}
?>
