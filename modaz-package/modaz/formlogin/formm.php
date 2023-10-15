<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login & Signup Form</title>
    <link rel="stylesheet" href="formm.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Login</div>
            <div class="title signup">Sign Up</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Sign Up</label>
                <div class="slider-tab"></div>
            </div>

            <div class="form-inner">
                <form name="form1" id="loginForm" method="post" action="XulyLogin.php" class="login">
                    <div class="field">
                        <input type="text" name="tUser" id="tUser" placeholder="UserName" required>
                    </div>
                    <div class="field">
                        <input type="password" name="tPassword" id="tPassword" placeholder="Password" required>
                    </div>
                    <div class="pass-link"><a href="#">Forgot password?</a></div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="b1" id="b1" value="Login">
                    </div>
                    <div class="signup-link">Not a member? <a href="">Sign Up now</a></div>
                </form>
                <!-- ----------------------------- -->
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
          $ketqua =insertUser($user,$pass,$fullname);
          if($ketqua==TRUE)
            echo "<h3></h3>";
          else
            echo "<h3> Thêm User LỖI</h3>";
        }
      }
    ?>

                <form name="form1" id="loginForm" action="" method="get" class="signup">
                    <div class="field">
                        <input type="text" name="fullname" value="<?=$fullname?>" placeholder="FullName" required>
                    </div>
                    <div class="field">
                        <input type="text" name="username" value="<?=$user?>" placeholder="UserName" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" value="<?=$pass?>" placeholder="Password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="bSubmit" value="Create Account">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = (() => {
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (() => {
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
    });
    signupLink.onclick = (() => {
        signupBtn.click();
        return false;
    });
    </script>

</body>

</html>