<!DOCTYPE html>
<html>
<head>
  <title>Login</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="logins.css">

</head>
<body>
<div class="container">
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#login">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#register">Register</a>
    </li>
  </ul>

  <div class="tab-content">
    <div class="tab-pane fade show active" id="login">
      <form name="form1" id="loginForm" method="post" action="XulyLogin.php">
        <div class="form-group">
          <label for="username">UserName:</label>
          <input type="text" class="form-control" name="tUser" id="tUser">
        </div>
        <div class="form-group">
          <label for="password"> PassWord : </label>
          <input type="password" class="form-control" name="tPassword" id="tPassword">
        </div>
        <input type="submit" class="btn btn-primary btn-block mt-3" name="b1" id="b1" value="Login">
      </form>
      <div class="text-start mt-1">
          <button class="btn btn-google" style="padding: 0px 30px;" onclick="loginWithGoogle()">Login with Google</button>
        </div>
        <div class="text-end">
        <button class="btn btn-facebook" style="padding: 0px 30px;" onclick="loginWithFacebook()">Login with Facebook</button>
        </div>
      
    </div>

    <?php
      require_once("Database.php");
      //khai báo sẵn các biến để khi lần đầu gọi trang dangky.php
      //thì không bi lỗi hiển thị các biến lên form (khi chưa submit)
      $fullname="";
      $user = "";
      $pass ="";
      $errFullname = "";
      $errUser = "";
      $errPass = "";
      //nếu form đã submit thì mới lấy dữ liệu từ $_REQUEST
      if(isset($_REQUEST["bSubmit"]))
      {
        $fullname= $_REQUEST["fullname"];
        $user = $_REQUEST["username"];
        $pass = $_REQUEST["password"];
        if($fullname=="")
          $errFullname="Chưa nhập fullname";
        if($user=="")
          $errUser = "Chưa nhập username";
        else if(KiemtraUser($user)==true)
          $errUser = "username đã tồn tại";
        if(strlen($pass)<6)
        $errPass = "Password phải >=6 ký tự";

        if($errFullname=="" && $errUser=="" && $errPass=="")    
        {
          echo "<h3>Dữ liệu đã nhập đủ</h3>";
          $ketqua =insertUser($user,$pass,$fullname);
          if($ketqua==TRUE)
            echo "<h3>Đăng ký thành công</h3>";
          else
            echo "<h3> Thêm User LỖI</h3>";
        }
      }
    ?>
    
    <div class="tab-pane fade" id="register">
      <form name="form1" id="loginForm" action="" method="get">
        <p>FullName :<input type="text" class="form-control" name="fullname" value="<?=$fullname?>">
        <span style="color:red"><?=$errFullname?></span>
        </p>
        <p>Username: <input type="text" class="form-control" name="username" value="<?=$user?>">
        <span style="color:red"><?=$errUser?></span>
        </p>
        <p>Password : <input type="password" class="form-control" name="password" value="<?=$pass?>">
        <span style="color:red"><?=$errPass?></span>
        </p>
        <p>
        <input type="submit"class="btn btn-primary btn-block" name="bSubmit" value="Create Account">
        </p>
      </form>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    $('#loginForm').submit(function(event){
      event.preventDefault();

      var username = $('#username').val();
      var password = $('#password').val();

      if (username === '' || password === '') {
        alert('Vui lòng điền đầy đủ tt');
        return;
      }
      alert('Succsess');
    });
    $('#registerForm').submit(function(event){
      event.preventDefault();

      var fullname = $('#fullname').val();
      var email = $('#email').val();
      var password = $('#reg-password').val();

      if (fullname === '' || email === '' || password === '') {
        alert('Vui lòng điền đầy đủ tt');
        return;
      }
      alert('Succcess');
    });
  });

  function loginWithGoogle() {
    alert('Login with Google');
  }

  function loginWithFacebook() {
    alert('Login with Facebook');
  }
</script>
</body>
</html>