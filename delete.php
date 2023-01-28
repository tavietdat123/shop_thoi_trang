<?php
    require_once('conected.php');
    $product_id = $_GET['id'];
    $delete = 'delete from san_pham where id='.$product_id;
    $delete_sp = $connect->prepare($delete);
// 5. Thực thi
$delete_sp->execute();
// 6. Quay về trang mong muốn
$smg = "Xóa sản phẩm thành công thành công <style>:root{--test-d:red;}.toastt{display:flex !important;}</style>";

header("location: /managewebsite.php?smg=$smg");

