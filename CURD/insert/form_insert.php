<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./process_insert.php" method="post" target = "_blank">
        <label for="">Tiêu đề</label>
        <input type="text" name="tieu_de" id=""> <br>
        <label for="">Nội dung</label>
        <textarea name="noi_dung" id="" cols="30" rows="10" ></textarea> <br>
        <label for="">link ảnh</label>
        <input type="text" name="link_anh" id=""> <br>
        <input type="submit" value="Upload">
    </form>
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