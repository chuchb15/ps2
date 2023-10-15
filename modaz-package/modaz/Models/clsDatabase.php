<?php
/*
lớp clsDatabase chứa 2 thuộc tính
$conn: là đối tượng PDO 
$pdo_smt: là đối tượng thực thi SQL và quản lý kết quả của SQL
*/
class clsDatabase{
    public $conn ;
    public $pdo_stm ;
    //hàm tạo của lớp clsDatabase sẽ gọi lệnh kết nối CSDL và gán kết quả cho $conn
    function __construct()
    {
        $this->conn=NULL;
        $this->pdo_stm=NULL;
        $servername = "localhost:3306"; 
        $user = "root";
        $pass = "";
        try{
            $this->conn = new PDO("mysql:host=$servername;dbname=demoMVC",$user,$pass);
            $this->conn->query("SET NAMES UTF8");
        }
        catch(PDOException $e){
            echo "<p>" . $e->getMessage() . "</p>";
            die ("<p>LỖI KẾT NỐI CSDL</p>");    
        }
    }
    //hàm ThucthiSQL($sql, $param) để thực thi mọi câu lệnh SQL 
    //với $param là mảng chứa các giá trị gán cho dấu ? trong $sql
    //$param có thể là NULL nếu lệnh $sql không có tham số ?
    function ThucthiSQL($sql, $param=NULL)
    {
        $ketqua=FALSE;
        if($this->conn ==NULL)
        {
            return FALSE;
        }
        $this->pdo_stm = $this->conn->prepare($sql);
        if($param==NULL)//thực thi $sql không tham số ?
            $ketqua = $this->pdo_stm->execute(); 
        else//thực thi $sql binding tham số ? với giá trị mảng $pamram
            $ketqua = $this->pdo_stm->execute($param);
        return $ketqua;
    }

}
?>