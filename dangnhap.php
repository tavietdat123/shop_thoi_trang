<?php 
session_start();
 require_once('conected.php');
  $username_dn = 'select * from khach_hang';
  $tendangnhap_dn = $connect->prepare($username_dn);
  $tendangnhap_dn->execute();
  $tendangnhap_dn_in = $tendangnhap_dn->fetchAll();

  if(isset($_POST['check'])){
    $username_dl = $_POST['username_dl'];
    $password_dl = $_POST['password_dl'];
 
  foreach ($tendangnhap_dn_in as $key => $value) {
  
    if(isset($username_dl) && isset($password_dl)){
        if($value['username'] == $username_dl && $value['password'] == $password_dl){
            
            $_SESSION['username']= $value['username'] ;
            
            $smg = "Đăng nhập thành công<style>:root{--test-d:green;}.toastt{display:flex!important;}</style>";
             header("location: managewebsite.php?smg=$smg");

        }elseif(!($value['username'] == $username_dl) && !($value['password'] == $password_dl) ){
            $errormkall_dl = "Tài khoản hoặc mật khẩu không chính xác";
        }
    }
  }
 
    if($username_dl == ""){
        $errortk_dl = "Bạn cần nhập trường này";
    }
  
    if ($password_dl == "") {
        $errormk_dl = "Bạn cần nhập trường này";
    }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐĂNG NHẬP DAT09-SHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="shortcut icon" href="https://dewey.tailorbrands.com/production/brand_version_mockup_image/370/7604811370_4fd0b0c2-63b0-4149-b93c-ffba9307425a.png?cb=1658224685" type="image/x-icon">
</head>
<body>
    <div style="background-image: url('https://theme.hstatic.net/1000306633/1000891824/14/show_block_home_category_image_3_new.png?v=16');
    background-size: 100%; padding-top: 48.5%;"></div>
<div class="modal js-modal-login">
        <div class="modal__overlay"></div>
        <div class="modal__body">
            <div class="auth-form__container">

                <div class="auth-form__header">
                    <h3 class="auth-form__heading">Đăng nhập</h3>
                    <a href="dangky.php" style="text-decoration: none;">
                    <span class="auth-form__switch-btn js-res-move">
                        Đăng ký
                    </span>
                </a>
                </div>
                <div class="auth-form__form">
            <form action="dangnhap.php" method="POST">
                    <div class="auth-form__group">
                        <input class="auth-form__input" type="text" name="username_dl" value="<?php if(isset($username_dl)){echo$username_dl;} ?>" placeholder="Nhập tài khoản"></div>
                        <p style="color: red;font-size:12px;margin: 0;"> <?php if(isset($errortk_dl)){echo$errortk_dl;} ?></p>
                    <div class="auth-form__group">

                        <input class="auth-form__input" type="password" name="password_dl" value="<?php if(isset($password_dl)){echo$password_dl;} ?>" placeholder="Nhập mật khẩu"></div>
                        <p style="color: red;font-size:12px;margin: 0;"> <?php if(isset($errormk_dl)){echo$errormk_dl;}elseif(isset($errormkall_dl)){echo$errormkall_dl;} ?></p>

                    <div class="auth-form__aside-login">

                        <a href="" class="auth-form__text-link-login auth-form__text-link-fogot">Quên mật khẩu</a>
                        <span class="auth-form__aside-separate"></span>
                        <a href="" class="auth-form__text-link-login">Chính sách bảo mật</a>

                    </div> 
                    <div class="auth-form__controls">
                        <button class="btn btn--primary auth-form__controls-reg" type="submit" name="check">ĐĂNG NHẬP</button>
                   </div>
                 </form>
                   <div class="d-flex ms-auto justify-content-end mb-3">
                   <a href="home.php"><button class="btn auth-form__controls-back js-auth-form-back-login">TRỞ LẠI</button></a>
                        
                   </div>
                        
                    
                </div>
            </div>
            <div class="auth-form__Social">
                <a href="" class="auth-form__face auth-form__Social-link"><i class="fa-brands fa-facebook-square auth-form__Social-icon"></i><span class="auth-form__Social-text">Kết nối với Facebook</span></a>
                <a href="" class="auth-form__gg auth-form__Social-link"><i class="fa-brands fa-google auth-form__Social-icon"></i><span class="auth-form__Social-text">Kết nối với Google</span></a>
            </div>



        </div>
</body></html>
<style>
        .modal {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
}



.modal__overlay {
    position: absolute;
    width: 100%;
    height: 100%;
   
    
}

.modal__body {
    --growth-from: 0.7;
    --growth-to: 1;
    z-index: 1;
    margin: auto;
    background-color: #fff;
    border-radius: 5px;
    width: 500px;
    overflow: hidden;
    animation: growth linear 0.1s;
    overflow: hidden;
    box-shadow: 0 6px 18px 0 rgb(0 0 0);

}

.auth-form__header {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.auth-form__container {
    padding: 32px 32px 0 32px;
}

.auth-form__heading {
    font-size: 20px;
    font-weight: 400;
    color: #333;
    margin: 0 0 0 12px;
}

.auth-form__switch-btn {
    font-size: 14px;
    color: darkgreen;
    font-weight: 500;
    cursor: pointer;
    margin-right: 12px;
}

.auth-form__form {
    margin-top: 34px;
}

.auth-form__input {
    width: 100%;
    height: 40px;
    padding: 0 12px;
    font-size: 14px;
    outline: none;
    border: 1px solid #dbdbdb;
    margin-top: 16px;
    border-radius: 2px;
}

.auth-form__input:focus {
    border: 1px solid #888;
}

.auth-form__aside {
    margin: 18px 12px 0;
}

.auth-form__policy-text {
    font-size: 12px;
    line-height: 18px;
    text-align: center;
    margin: 16px 0 0;
    font-weight: 400;
}

.auth-form__text-link {
    text-decoration: none;
    color: darkgreen;
}

.auth-form__controls {
    margin-top: 50px;
    display: flex;
    margin-bottom: 20px;
    justify-content: flex-end;
}

.auth-form__controls-back {
    color: #333;
    background-color: #fff;
    margin-right: 8px;
}

.auth-form__controls-back:hover {
    background-color: #f0f0f0;
    cursor: pointer;
}

.auth-form__Social {
    background-color: #f5f5f5;
    padding: 12px 36px;
    font-size: 12px;
    display: flex;
    justify-content: space-between;
}

.auth-form__face {
    background-color: #033f8b;
    color: #fff;
}

.auth-form__gg {
    background-color: #fff;
    color: #333;
}

.auth-form__Social-icon {
    font-size: 16px;
}

.auth-form__Social-link {
    text-decoration: none;
    padding: 8px;
    border-radius: 2px;
    display: flex;
    align-items: center;
    min-width: 204px;
}

.auth-form__Social-text {
    margin: 0 36px;
}

.auth-form__aside-login {
    display: flex;
    justify-content: flex-end;
    margin-top: 18px;
}

.auth-form__text-link-login {
    text-decoration: none;
    color: #939393;
    font-size: 14px;
}

.auth-form__text-link-fogot {
    color: darkgreen;
}

.auth-form__aside-separate {
    display: block;
    border-right: 1px solid #AEAEAE;
    margin: 0 12px;
}
</style>
