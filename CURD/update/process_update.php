<?php
    $ma = $_POST['ma'];
    $tieu_de = $_POST['tieu_de'];
    $noi_dung = $_POST['noi_dung'];
    $link_anh = $_POST['link_anh'];
    require '../connect.php';
    $sql = "update crud
        set Tieu_de = '$tieu_de',noi_dung = '$noi_dung',anh = '$link_anh'
        where id = '$ma' ";
    mysqli_query($ketnoi,$sql);
    mysqli_close($ketnoi);
?>