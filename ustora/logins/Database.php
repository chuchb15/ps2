<?php
//hàm kết nối CSDL và trả về biến $conn là đối tượng PDO
function ConnectDB()
{
    $conn = NULL;
    try{
        //new PDO("url","user","password");
        $conn = new PDO("mysql:host=localhost:3306;dbname=DACNTT","root","");
        $conn->query("SET NAMES UTF8");//thiết lập chế độ unicode
    }catch(PDOException $ex)
    {
        echo "<p>" . $ex->getMessage() . "</p>";
        die('<h3>LỖI KÊT NỐI CSDL</h3>');
    }
    return $conn;
}
//hàm thêm dữ liệu vào bảng tbUser
function insertUser($user,$pass,$fullname)
{
    $conn = ConnectDB();
    //$sql = "INSERT INTO tbUser VALUES(NULL,'$username','$password','$fullname')";
    $sql = "INSERT INTO tbUser VALUES(NULL,?,MD5(?),?)";
    //tạo đối tượng PDOStatement  để thực hiện sql
    $pdo_stm = $conn->prepare($sql);
    $data = [$user,$pass,$fullname];
    $ketqua = $pdo_stm->execute($data);
    return $ketqua;
    /*
    $pdo_stm->bindParam(1,$username);
    $pdo_stm->bindParam(2,$password);
    $pdo_stm->bindParam(3,$fullname);
    $ketqua = $pdo_stm->execute();//thực thiện lệnh sql ở dòng trên và trả về TRUE/FALSE
    return $ketqua;
    */
    
}
//hàm lấy dữ liệu từ bảng tbSanpham của CSDL DACNTT
//trả về mảng chứa các dòng và cột từ bảng tbSanpham
function KiemtraUser($user)
{
    $conn = ConnectDB();
    $sql = "SELECT * FROM tbUser WHERE username=?";
    //tạo đối tượng PDOStatement  để thực hiện sql
    $pdo_stm = $conn->prepare($sql);
    $data = [$user];
    $ketqua = $pdo_stm->execute($data);//thực thiện lệnh sql ở dòng trên và trả về TRUE/FALSE
    if($ketqua==TRUE)
    {
        $n = $pdo_stm->rowCount();
        if($n>0)//Nếu có dữ liệu
            return TRUE;
        else    
            return FALSE;
    }
    else {
        return FALSE;
    }
}
function CheckLogin($user,$pass)
{
    $conn = ConnectDB();
    //$sql = "SELECT * FROM tbUser WHERE username=? AND password=?";
    $sql = "SELECT * FROM tbUser WHERE username=? AND password=md5(?)";
    //tạo đối tượng PDOStatement  để thực hiện sql
    $pdo_stm = $conn->prepare($sql);
    $data = [$user,$pass];
    $ketqua = $pdo_stm->execute($data);//thực thiện lệnh sql ở dòng trên và trả về TRUE/FALSE
    if($ketqua==TRUE)
    {
        $n = $pdo_stm->rowCount();
        if($n>0)//Nếu có dữ liệu
            return $pdo_stm->fetch();//trả về mảng chứa record truy vấn được
        else    
            return NULL;
    }
    else {//LỖI TRUY VẤN CSDL
        return FALSE;
    }
}
?>