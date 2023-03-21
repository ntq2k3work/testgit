<?php
    $tieu_de = $_POST['tieu_de'];
    $noi_dung = $_POST['noi_dung'];
    $link_anh = $_POST['link_anh'];
    require '../connect.php';
    $sql = "insert into crud(tieu_de,noi_dung,anh) 
    values('$tieu_de','$noi_dung','$link_anh')";
    $loi = mysqli_error($ketnoi);
    echo $loi;
    mysqli_query($ketnoi,$sql);

    
    mysqli_close($ketnoi);
?>