<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $ma = $_GET['ma'] ?>
    <?php
        $ketnoi = mysqli_connect('localhost','root','','learn_curd');
        mysqli_set_charset($ketnoi,'utf8');
        $sql = "select * from crud where id = $ma";
        $ketqua = mysqli_query($ketnoi,$sql);
        $bai_tin_tuc = mysqli_fetch_array($ketqua);
    
    ?>
    <form action="./process_update.php" method="post" target = "_blank">
        <input type="text" name="ma" id="" value="<?php echo $bai_tin_tuc['id'] ?>" hidden>
        <label for="">Tiêu đề</label>
        <input type="text" name="tieu_de" id="" value="<?php echo $bai_tin_tuc['Tieu_de']  ?>"> <br>
        <label for="">Nội dung</label>
        <textarea name="noi_dung" id="" cols="80" rows="40"><?php echo $bai_tin_tuc['noi_dung'] ?></textarea> <br>
        <label for="">link ảnh</label>
        <input type="text" name="link_anh" id="" value="<?php echo $bai_tin_tuc['anh']  ?>"> <br>
        <input type="submit" value="Update">
    </form>
    <?php mysqli_close($ketnoi); ?>
    <style>
        input{
            margin: 10px 0;
        }
        label{
            min-width: 80px;
            display: inline-block;
        }
    </style>
</body>
</html>