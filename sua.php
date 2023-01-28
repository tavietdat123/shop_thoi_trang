<?php
require_once('conected.php');
if(isset($_POST['check'])){
    $id=$_POST['id'];
$img = $_FILES['img'];
$anh=$_POST['anh'];
$ten_sp = $_POST['ten_sp'];
$gia_cu = $_POST['gia_cu'];
$gia_sp = $_POST['gia_sp'];
$so_luong = $_POST['so_luong'];
$xuat_xu = $_POST['xuat_xu'];
$mo_ta = $_POST['mo_ta'];
if($img['size'] > 0 ){
    $ext = pathinfo($img['name'] ,PATHINFO_EXTENSION );
    if($ext != "png" && $ext != "jpg" && $ext != "jpeg" && $ext != "gif"){
        $erorr_img = "File không đúng định dạng";
    }else{
        $anh= $img['name'];
        move_uploaded_file($img['tmp_name'] , 'img/'.$anh);

    }
}




    
    $create_column = "update san_pham set img = '$anh', ten_sp = '$ten_sp',gia_cu = '$gia_cu',gia_sp = '$gia_sp',so_luong = '$so_luong',xuat_xu = '$xuat_xu',mo_ta = '$mo_ta' where id = $id";
$statement = $connect->prepare($create_column);

$statement->execute();

$smg = "Sửa sản phẩm thành công thành công <style>:root{--test-d:blue;}.toastt{display:flex !important;}</style>";

header("location: managewebsite.php?smg=$smg");

}

    $id = $_GET['id'];
    $sql = "select * from san_pham where id = $id";
    $stmt = $connect->prepare($sql);
    $stmt -> execute();
    $prod = $stmt->fetch();

   ?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sửa sản phẩm</title>
    <link rel="shortcut icon" href="https://dewey.tailorbrands.com/production/brand_version_mockup_image/370/7604811370_4fd0b0c2-63b0-4149-b93c-ffba9307425a.png?cb=1658224685" type="image/x-icon">

</head>
<body>
    <div class='container'>
        <h1>Sửa dữ liệu sản phẩm</h1>
        <form
            action="sua.php"
            method="POST"
            enctype="multipart/form-data"
        >
        <input type="hidden" name="id" value="<?= $prod['id_prd']?>">
            <div class='form-group'>
                <label for="">ảnh</label>
                <img src="img/<?= $prod['img'] ?>" style="height: 150px;" alt="">
                <input type="file" name='img' class='form-control'>
                <input type="hidden" name="anh" value="<?= $prod['img']?>">
            </div>
            <span style="color: red; font-size: 12px;"><?php if(isset($erorr_img)){ echo$erorr_img;}?></span>
            <div class='form-group'>
                <label for="">Tên sản phẩm</label>
                <input type="text" name='ten_sp' class='form-control' value="<?= $prod['ten_sp']?>">
            </div>
            <div class='form-group'>
                <label for="">Giá cũ</label>
                <input type="number" name='gia_cu' class='form-control' value="<?= $prod['gia_cu']?>">
            </div>
            <span style="color: red; font-size: 12px;"><?php if(isset($erorrgia_cu)){ echo$erorrgia_cu;}?></span>
            <div class='form-group'>
                <label for="">Giá mới</label>
                <input type="number" name='gia_sp' class='form-control' value="<?= $prod['gia_sp']?>">
            </div>
            <span style="color: red; font-size: 12px;"><?php if(isset($erorrgia_sp)){ echo$erorrgia_sp;}?></span>
            <div class='form-group'>
                <label for="">Số lượng</label>
                <input type="number" name='so_luong' class='form-control' value="<?= $prod['so_luong']?>">
            </div>
            <span style="color: red; font-size: 12px;"><?php if(isset($erorrso_luong)){ echo$erorrso_luong;}?></span>
            <div class='form-group'>
                <label for="">Xuất sứ</label>
                <input type="text" name='xuat_xu' class='form-control' value="<?= $prod['xuat_xu']?>">
            </div>
            <div class='form-group'>
                <label for="">Mô tả</label>
                <input type="text" name='mo_ta' class='form-control' value="<?= $prod['mo_ta']?>">
            </div>
            <div class="mt-3">
                <button class='btn btn-primary' type='submit' name="check">Sửa</button>
            
            </div>
    <a href="managewebsite.php" style="text-decoration: none;"><button type="button" class="btn btn-dark mt-3 d-flex ms-auto mb-5">Quay về quản lý</button></a>


        </form>
    </div>
</body>
</html>