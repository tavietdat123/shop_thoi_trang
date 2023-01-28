<?php
require_once('conected.php');
if(isset($_POST['check'])){
$img = $_FILES['img'];
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
    }
}else{
        $erorr_img = "Bạn chưa nhập ảnh";
    }
    
if($ten_sp == ""){
    $erorr_tensp = "Bạn chưa nhập tên sản phẩm";
}

if($gia_cu == ""){
    $erorrgia_cu = "Bạn chưa nhập giá cũ";
}elseif(!is_numeric($gia_cu)){
    $erorrgia_cu = "Bạn phải nhập số";
}elseif($gia_cu <= 0){
    $erorrgia_cu = "Bạn phải nhập số dương";
}
if($gia_sp == ""){
    $erorrgia_sp = "Bạn chưa nhập giá hiện tại";
}elseif(!is_numeric($gia_sp)){
    $erorrgia_sp = "Bạn phải nhập số";
}elseif($gia_sp <= 0){
    $erorrgia_sp = "Bạn phải nhập số dương";
}
if($so_luong == ""){
    $erorrso_luong = "Bạn chưa nhập số lượng";
}elseif(!is_numeric($so_luong)){
    $erorrso_luong = "Bạn phải nhập số";
}elseif($so_luong < 0){
    $erorrso_luong = "Bạn phải nhập số dương";
}
if($xuat_xu == ""){
    $erorrxuat_xu = "Bạn chưa nhập xuất xứ";
}

if(!isset($erorr_img) && !isset($erorr_tensp) && !isset($erorrgia_cu) && !isset($erorrgia_sp) && !isset($erorrso_luong) && !isset($erorrxuat_xu)){
    $img_sp = $img['name'];
    $create_column = "INSERT INTO san_pham (img, ten_sp,gia_cu,gia_sp,so_luong,xuat_xu,mo_ta) "
. "VALUES ('$img_sp', '$ten_sp','$gia_cu','$gia_sp','$so_luong','$xuat_xu','$mo_ta')";
var_dump($create_column);
$statement = $connect->prepare($create_column);
// 5. Thực thi
$statement->execute();

move_uploaded_file($img['tmp_name'] , 'img/'.$img_sp);
// 6. Quay về trang danh sách
$smg = "Tạo sản phẩn thành công<style>:root{--test-d:green;}.toastt{display:flex!important;}</style>";
header("location: managewebsite.php?smg=$smg");
}
}

?>
<style>
    :root{
        --test-d:green;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tạo sản phẩm</title>
    <link rel="shortcut icon" href="https://dewey.tailorbrands.com/production/brand_version_mockup_image/370/7604811370_4fd0b0c2-63b0-4149-b93c-ffba9307425a.png?cb=1658224685" type="image/x-icon">

</head>
<body>
    <div class='container'>
        <h1>Nhập dữ liệu sản phẩm</h1>
        <form
            action="fromcreate.php"
            method="POST"
            enctype="multipart/form-data"
        >
            <div class='form-group'>
                <label for="">ảnh</label>
                <input type="file" name='img' class='form-control'>
            </div>
            <span style="color: red; font-size: 12px;"><?php if(isset($erorr_img)){ echo$erorr_img;}?></span>
            <div class='form-group'>
                <label for="">Tên sản phẩm</label>
                <input type="text" name='ten_sp' class='form-control' value="<?php if(isset($ten_sp)){echo$ten_sp; }?>">
            </div>
            <span style="color: red; font-size: 12px;"><?php if(isset($erorr_tensp)){ echo$erorr_tensp;}?></span>
            <div class='form-group'>
                <label for="">Giá cũ</label>
                <input type="text" name='gia_cu' class='form-control' value="<?php if(isset($gia_cu)){echo$gia_cu; }?>">
            </div>
            <span style="color: red; font-size: 12px;"><?php if(isset($erorrgia_cu)){ echo$erorrgia_cu;}?></span>
            <div class='form-group'>
                <label for="">Giá mới</label>
                <input type="text" name='gia_sp' class='form-control' value="<?php if(isset($gia_sp)){echo$gia_sp; }?>">
            </div>
            <span style="color: red; font-size: 12px;"><?php if(isset($erorrgia_sp)){ echo$erorrgia_sp;}?></span>
            <div class='form-group'>
                <label for="">Số lượng</label>
                <input type="text" name='so_luong' class='form-control' value="<?php if(isset($erorrso_luong)){echo$erorrso_luong; }?>">
            </div>
            <span style="color: red; font-size: 12px;"><?php if(isset($erorrso_luong)){ echo$erorrso_luong;}?></span>
            <div class='form-group'>
                <label for="">Xuất sứ</label>
                <input type="text" name='xuat_xu' class='form-control' value="<?php if(isset($xuat_xu)){echo$xuat_xu; }?>">
            </div>
            <span style="color: red; font-size: 12px;"><?php if(isset($erorrxuat_xu)){ echo$erorrxuat_xu;}?></span>
            <div class='form-group'>
                <label for="">Mô tả</label>
                <input type="text" name='mo_ta' class='form-control' value="<?php if(isset($mo_ta)){echo$mo_ta; }?>">
            </div>
            <div class="mt-3">
                <button class='btn btn-primary' type='submit' name="check">Tạo mới</button>
                <button class='btn btn-warning' type='reset'>Nhập lại</button>
            </div>
    <a href="managewebsite.php" style="text-decoration: none;"><button type="button" class="btn btn-dark mt-3 d-flex ms-auto mb-5">Quay về quản lý</button></a>


        </form>
    </div>
</body>
</html>