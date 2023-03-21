<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include './connect.php';
        if(!isset($_GET['trang']))$trang = 1;
        else $trang = $_GET['trang'];
        if(isset($_GET['tim_kiem'])) $tim_kiem = $_GET['tim_kiem'];
        else $tim_kiem = '';
        $sql_so_tin_tuc = "select count(*) from crud
            where tieu_de like '%$tim_kiem%'
        ";
        $mang_so_tin_tuc = mysqli_query($ketnoi,$sql_so_tin_tuc);
        $ket_qua_so_tin_tuc = mysqli_fetch_array($mang_so_tin_tuc);
        $so_tin_tuc = $ket_qua_so_tin_tuc['count(*)'];
        $so_tin_tuc_tren_1_trang = 2;
        $so_trang = ceil($so_tin_tuc/$so_tin_tuc_tren_1_trang);

        $bo_qua = $so_tin_tuc_tren_1_trang *($trang-1);
        $sql = "select * from crud
        where tieu_de like '%$tim_kiem%'
        limit $so_tin_tuc_tren_1_trang offset $bo_qua";
        $ketqua = mysqli_query($ketnoi,$sql);
    
    ?>
    <h1><a href="./insert/form_insert.php" style="margin: 10px 0;display:block;width:fit-content;">Thêm bài viết</a></h1>
    <form action="">
        <label for="">Tìm kiếm</label>
        <input type="search" name="tim_kiem" id="" value="<?php echo $tim_kiem ?>">;
    </form>
    <table border="1" width = "100%">
        <tr>
            <th>Mã</th>
            <th>Tiêu đề</th>
            <!-- <th>Nội dung</th> -->
            <th>Ảnh</th>
            <th>Sửa</th>
            <th>Xoá</th>
        </tr>
        <?php foreach($ketqua as $value){ ?>
                <tr>
                    <td><?php echo $value['id'] ?></td>
                    <td>
                        <a href="./insert/show.php?ma=<?php echo $value['id'] ?>">
                            <?php echo $value['Tieu_de'] ?>
                        </a>
                    </td>
                    <!-- <td><?php echo $value['noi_dung'] ?></td> -->
                    <td>
                        <img src="<?php echo $value['anh'] ?>" alt="" height="auto" width="150px">
                    </td>
                    <td>
                        <a href="./update/form_update.php?ma=<?php echo $value['id']?>">Sửa</a>
                    </td>
                    <td>
                        <a class="delete" href="./delete/process_delete.php?ma=<?php echo $value['id']?>" onclick="return confirm('Are you sure?')">Xoá</a>

                    </td>
                </tr>

         <?php } ?>
        </table>
        <?php for($i = 1;$i <= $so_trang ;$i++) {?>
            <a href="?trang=<?php echo $i ?>&tim_kiem=<?php echo $tim_kiem ?>"><?php echo $i ?></a>
        <?php } ?> 
</body>
</html>