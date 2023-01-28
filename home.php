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
    <title>DAT-09 SHOP</title>
    <link rel="shortcut icon" href="https://dewey.tailorbrands.com/production/brand_version_mockup_image/370/7604811370_4fd0b0c2-63b0-4149-b93c-ffba9307425a.png?cb=1658224685" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg " style="position: absolute; top :10px; left:0;right: 0; background-color: transparent;">
        <div class="container">
            <a class="navbar-brand" href="home.php">DAT09-shop</a>
            
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav me-3 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Sản phẩm</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="/tuyendung.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Tuyển dụng
          </a>
          </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link " href="giohang.php">
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
    <div class="slider" style="background-image: url('https://theme.hstatic.net/1000306633/1000891824/14/slideshow_3.jpg?v=16');">
    </div>
    <div class="container-fluid">
        <div class="row img-2">
            <div class="col col-4 img-1" style="background-image: url('//theme.hstatic.net/1000306633/1000891824/14/block_home_category1_new.png?v=16');"></div>
            <div class="col col-4 img-1" style="background-image: url('https://theme.hstatic.net/1000306633/1000891824/14/block_home_category2_new.png?v=16');"></div>
            <div class="col col-4 img-1" style="background-image: url('//theme.hstatic.net/1000306633/1000891824/14/block_home_category3_new.png?v=16');"></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-12 slider" style="background-image: url('https://theme.hstatic.net/1000306633/1000891824/14/show_block_home_category_image_3_new.png?v=16');"></div>
        </div>

    </div>
    <div class="container-fluid bg-black">
        <div class="row justify-content-around">
            <div class="col col-4" style="margin: 40px 0;">
                <img style="width: 100%; " src="https://file.hstatic.net/1000306633/article/blog2_a408af0a74e345288398890b15519188_large.jpg" alt="">
                <span class="date">Thứ Ba 16,03,2021</span>
                <h4 class="heading">Hades - Một Trong Những "Phát Súng Đầu Tiên" của Vietnamese Streetwear</h4>
                <p class="text-p">Tiếp tục thực hiện sứ mệnh "lan toả phong cách sống tích cực tới thế hệ trẻ", Hades chính thức nhận lời mời đồng hành cùng High School Best Dance...</p>
            </div>
            <div class="col col-4" style="margin: 40px 0;">
                <img style="width: 100%;" src="https://file.hstatic.net/1000306633/article/blog1_34f17ec315f84ac5986dd663c509666a_large.jpg" alt="">
                <span class="date">Thứ Ba 16,03,2021</span>
                <h4 class="heading">Hades Streetwear Đồng Hành Cùng "Highshool Best Dance Crew"</h4>
                <p class="text-p">Ra đời từ những năm cuối thế kỷ 20, streetwear là phong cách thời trang phổ biến của cộng đồng đam mê bộ môn skateboard. Dù mới “bén duyên” với giới...</p>
            </div>



        </div>
    </div>
    <footer>
        <footer class="footer">

            <div class="row m-0">
                <div class="col col-3 text-center ">
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

                <div class="col col-3 text-center ">
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

                <div class="col col-3 text-center ">
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

                <div class="col col-3 text-center ">
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
    .text-p {
        color: #fff;
        line-height: 1.6;
    }
    
    .heading {
        font-size: 20px;
        font-weight: 600;
        color: #fff;
        margin-bottom: 16px;
        cursor: pointer;
    }
    
    .date {
        font-size: 12px;
        font-weight: 300;
        margin: 12px 0;
        color: #fff;
        display: block;
    }
    
    .img-2 {
        padding: 12px 6px;
    }
    
    .img-1 {
        background-size: 98%;
        background-repeat: no-repeat;
        background-position: top center;
        padding-top: 49%;
        overflow: hidden;
    }
    
    .img-1:hover {
        transition: linear 0.3s;
        transform: scale(1.03);
    }
    
    .slider {
        background-size: 100%;
        background-repeat: no-repeat;
        background-position: top center;
        padding-top: 56%;
    }
    
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