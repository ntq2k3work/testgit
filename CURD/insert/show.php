<?php
    $id = $_GET['ma'];
    require '../connect.php';
    $sql = "select * from crud where id = $id";
    $ketqua = mysqli_query($ketnoi,$sql);
    $bai_tin_tuc = mysqli_fetch_array($ketqua);
?>
    <h1>
        <?php echo $bai_tin_tuc['Tieu_de']; ?>
    </h1>
    <p>
        <?php echo nl2br($bai_tin_tuc['noi_dung']) ?>
    </p>
    <img src="<?php echo $bai_tin_tuc['anh'] ?>" alt="">
