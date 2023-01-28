<?php
    require_once('conected.php');

    // $sql = 'select * from phong_ban where name like "%IT%"'; // câu truy vấn
    $sqlctr = 'select * from danh_muc'; // câu truy vấn
    $ctr = $connect->prepare($sqlctr); // nạp
    $ctr->execute(); // thực thi
    $categories = $ctr->fetchAll();// nhận kq

    $id = $_GET['id'] ;
    $sql = "select * from san_pham where id = $id";
    $stmt = $connect->prepare($sql);
    $stmt ->execute();
    $prd = $stmt->fetch();
    
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <title>DAT-09 SHOP - giỏ hàng</title>
    <link rel="shortcut icon" href="https://dewey.tailorbrands.com/production/brand_version_mockup_image/370/7604811370_4fd0b0c2-63b0-4149-b93c-ffba9307425a.png?cb=1658224685" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="home.php">DAT09-shop</a>
            
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav me-3 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="home.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Sản phẩm</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="/tuyendung.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Tuyển dụng
          </a>
          </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link  active" href="giohang.php" >
            Giỏ hàng
          </a>
                    </li>

                </ul>
                <form class="d-flex w-50 me-3" role="search" action="" method="GET">
                    <input class="form-control me-2" type="search" name="num" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" name="kiemtra">Search</button>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0 ">
                    <li class="nav-item js-login">
                        <a class="nav-link active " aria-current="page" href="/dangnhap.php">Đăng nhập</a>
                    </li>
                    <li class="nav-item js-res">
                        <a class="nav-link active" href="/dangky.php">Đăng kí</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container content">
        <div class="row">
            <div class="col-2">
              
                <ul class="list-group list-group-flush">
                    <?php foreach ($categories as $key => $value):?>
                    <li class="list-group-item ctgt-item">
                        <a href="#" style="text-decoration: none; color: #333;">
                            <?= $value['loai_sp']?>
                        </a>
                    </li>
                    <?php endforeach ?>


                </ul>
            </div>

            <div class="col-10">
                
                <img src="img/<?= $prd['img'] ?>" style="height: 400px;" alt="">
                <h5><?= $prd['ten_sp'] ?></h5>
                <p>Giá cũ : <?= $prd['gia_cu'] ?></p>
                <p>Giá mới : <?= $prd['gia_sp'] ?></p>
                <p>Số lượng : <?= $prd['so_luong'] ?></p>
                <p>xuất sứ : <?= $prd['xuat_xu'] ?></p>
                <p>Mô tả : <?= $prd['mo_ta'] ?></p>

               <a href="/index.php" class="btn btn-danger " >Quay lại mua sắp</a>
               <a href="/giohang.php" class="btn btn-success ms-3">Mua hàng</a>
              
                
            </div>
        </div>
    </div>
    <footer style="position: relative; bottom: -125px;">
        <footer class="footer">
            <div class="grid wide">
                <div class="row m-0">
                    <div class="col col-3 text-center">
                        <h3 class="footer__heading">Chăm sóc khách hàng</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-link">Trung tâm trợ giúp</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-link">DAT09-Shop Mall</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-link">Hướng dẫn mua hàng</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col col-3 text-center">
                        <h3 class="footer__heading">Giới thiệu</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-link">Giới thiệu</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-link">Tuyển dụng</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-link">Điều khoản</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col col-3 text-center">
                        <h3 class="footer__heading">danh mục</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-link">Trang điểm mặt</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-link">Trang điểm môi</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-link">Trang điểm mắt</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col col-3 text-center">
                        <h3 class="footer__heading">Theo dõi</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-link"><i class="footer-link-icon fa-brands fa-facebook"></i>Facebook</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-link"><i class="footer-link-icon fa-brands fa-instagram"></i>Instagram</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-link"><i class="footer-link-icon fa-brands fa-linkedin"></i>Linkedin</a>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>


            <div class="footer__copyright">
                <div class="grid wide">
                    <p class="footer__copyright-text">© 2019 - Bản quyền thuộc về Công ty MyCV</p>
                </div>
            </div>
        </footer>
    </footer>
    



</body>

</html>
<style>
    
    .login_manage {
        position: fixed;
        right: 0;
        top: 60px;
        width: 150px;
        border: 1px solid #dad9d9;
        background-color: beige;
        display: flex;
        align-items: center;
    }
    
    .login_manage-link {
        color: #333;
        text-decoration: none;
    }
    
    .ctgt-item a {
        text-decoration: none;
        color: #333;
    }
    
    .ctgt-item:hover {
        color: darkblue;
    }
    
    .list-item {
        list-style: none;
    }
    
    .content {
        margin-top: 30px;
    }
    
    .product {
        margin-top: 10px;
        box-shadow: 0 0.0625rem 2px 0 rgb(0 0 0 / 20%);
        border: 1px solid #dad9d9;
        border-radius: 2px;
        overflow: hidden;
    }
    
    .product h5 {
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
        height: 40px;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        display: -webkit-box;
        overflow: hidden;
    }
    
    .product h5:hover {
        color: darkblue;
    }
    
    .product-img {
        background-size: contain;
        height: 150px;
        background-position: top center;
        background-repeat: no-repeat;
        padding-top: 100%;
    }
    
    .product-img:hover {
        transform: scale(1.03);
        transition: linear 0.3s;
    }
    
    .product .price-old {
        color: rgb(211, 210, 210);
        text-decoration: line-through;
        font-size: 14px;
    }
    
    .product .price-new {
        color: red;
        font-size: 16px;
        margin-bottom: 8px;
    }
    
    .product-text {
        padding: 8px 4px;
    }
    
    .product p {
        font-size: 12px;
        color: #666;
        margin: 8px 0 0;
    }
    
    .product a {
        text-decoration: none;
        color: #333;
    }
    
    .container-product {
        padding: 0 8px;
    }
    
    .footer {
        border-top: 4px solid darkgreen;
        padding: 16px 0 0;
        margin-top: 50px;
    }
    
    .footer__heading {
        font-size: 14px;
        color: #333;
        text-transform: uppercase;
    }
    
    .footer-list {
        padding: 0;
        margin: 0;
    }
    
    .footer-link {
        text-decoration: none;
        font-size: 12px;
        color: #939393;
        padding: 2px 0;
        display: block;
        line-height: 16px;
    }
    
    .footer-link:hover {
        color: darkgreen;
    }
    
    .footer-link:hover i {
        color: darkgreen;
    }
    
    .footer-link-icon {
        font-size: 14px;
        color: #666;
        margin-right: 5px;
    }
    
    .footer__dowload {
        display: flex;
    }
    
    .footer__dowload-qr {
        height: 80px;
        border: 1px solid #dbdbdb;
    }
    
    .footer-apps-link {
        text-decoration: none;
    }
    
    .footer-apps-all {
        height: 16px;
        margin: 4px 0;
    }
    
    li {
        list-style: none;
    }
    
    .footer-apps {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-left: 16px;
    }
    
    .footer__copyright {
        background-color: #f5f5f5;
        margin-top: 36px;
    }
    
    .footer__copyright-text {
        margin: 0;
        padding: 8px 0;
        text-align: center;
        font-size: 12px;
        color: #939393;
    }
</style>