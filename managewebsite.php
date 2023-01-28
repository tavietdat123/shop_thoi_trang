<?php
session_start();
    require_once('conected.php');
    $sqlprd = 'select * from san_pham';
    $prd = $connect->prepare($sqlprd); // nạp
    $prd->execute(); // thực thi
    $product = $prd->fetchAll();
    if(!isset($_SESSION['username'])){
        header('location: dangnhap.php');
        exit;
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://dewey.tailorbrands.com/production/brand_version_mockup_image/370/7604811370_4fd0b0c2-63b0-4149-b93c-ffba9307425a.png?cb=1658224685" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Quản lý sản phẩm</title>
</head>
<style>
    .toastt {
        position: fixed;
    top: 32px;
    right: 32px;
    display: none;
    align-items: center;
    border-left: 4px solid;
    padding: 5px 0;
    background-color: #fff;
    border-radius: 2px;
    box-shadow: 0 5px 8px rgba(0, 0, 0, 0.08);
    transition: all linear 0.3s;
    z-index: 9999999;
    animation:  slideinleft ease 0.5s, fadeout linear 1s 4s forwards;
}
.toast__icon {
    font-size: 24px;
}

.toast__icon,
.toast__close {
    padding: 0 16px;
}



.toast__titlee {
    font-size: 16px;
    color: #333;
    font-weight: 600;
}

.toast__msg {
    font-size: 14px;
    margin-top: 4px;
    line-height: 1.5;
    color: #888;
    min-width: 250px;
}

.toast__close {
    font-size: 20px;
    color: rgba(0, 0, 0, 0.3);
    margin-top: 4px;
    cursor: pointer;
}
.toast__titlee,.toast__icon{
    color: var(--test-d);

}
.toastt{
    border-color: var(--test-d);
}
@keyframes slideinleft {
    from {
        opacity: 0;
        transform: translateX(calc(100% + 32px));
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeout {
    to {
        opacity: 0;
        display: none!important;
    }
}




</style>
<body>

<div class="toastt">
<div class="toast__icon">
<i class="fa-solid fa-circle-check"></i>
        </div>
        <div class="toast__body">
            <h3 class="toast__titlee">thành công</h3>
            <p class="toast__msg"><?php if(isset($_GET['smg'])){echo$_GET['smg'];}?></p>
        </div>
        <div class="toast__close"><i class="fa-solid fa-xmark"></i></div>
</div>
    <table class="table table-hover">
<thead>
<h4 class="text-center">Tài khoản: <?php if(isset($_SESSION['username'])){
    echo$_SESSION['username'];
} ?></h4>
<tr>
                    <th>ID</th>
                    <th>ảnh</th>
                    <th>Tên</th>
                    <th>Giá cũ</th>
                    <th>Giá mới</th>
                    <th>Số lượng</th>
                    <th>Xuất sứ</th>
                    <th>Mô tả</th>
                    <th>hành động</th>

                </tr>
</thead>
<tbody>
    <?php foreach($product as $key => $value):?>
    <tr>
                  <th><?= $value['id'] ?></th>
                    <th><img src="img/<?= $value['img'] ?>" alt="" style="height: 100px;"></th>
                    <th><?= $value['ten_sp'] ?></th>
                    <th><?= $value['gia_cu'] ?></th>
                    <th><?= $value['gia_sp'] ?></th>
                    <th><?= $value['so_luong'] ?></th>
                    <th><?= $value['xuat_xu'] ?></th>
                    <th><?= $value['mo_ta'] ?></th>
                    <th>
                        <a href="delete.php?id=<?php echo$value['id']?>"><button class="btn btn-danger">xóa</button></a>
                        <a href="sua.php?id=<?php echo$value['id']?>"><button class="btn bg-primary text-white">Sửa</button></a>
                    </th>
                </tr>
                <?php endforeach ?>
                
</tbody>
    </table>
    <a href="fromcreate.php" style="text-decoration: none;"><button type="button" class="btn btn-success mt-3 d-flex ms-auto mb-5">Tạo Sản phẩm mới</button></a>
    <a href="index.php" style="text-decoration: none;"><button type="button" class="btn btn-dark mt-3 d-flex ms-auto mb-5">Quay về trang sản phẩm</button></a>
    <a href="dangxuat.php" style="text-decoration: none;"><button type="button" class="btn btn-dark mt-3 d-flex ms-auto mb-5">Đăng xuất</button></a>

</body>
</html>