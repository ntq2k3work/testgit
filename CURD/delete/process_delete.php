<?php
    require '../connect.php';
    $ma = $_GET['ma'];
    $delete = "delete from crud where id = '$ma'";
    mysqli_query($ketnoi,$delete);
    echo "<script>alert('Tin tức đã bị xoá') </script>";
?>
!