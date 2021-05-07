<?php
include('conectDB.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="mt-5 container">
        <div class="d-flex justify-content-center">
            <h1>เพิ่มสินค้าใหม่</h1>
        </div>

        <form action="saveProduct.php" method="post" enctype="multipart/form-data">
            <label for="pdname" style="font-size: 25px;">ชื่อสินค้า</label>
            <input type="text" id="pdname" name="pdname" class="form-control" required>
            <label for="type" style="font-size: 25px;">ประเภทสินค้า</label>
            <?php
            $sql = "SELECT * FROM producttype";
            $type = mysqli_query($conect, $sql);
            ?>
            <select name="type" id="type" class="form-select" required>
                <?php while ($row = mysqli_fetch_array($type)) { ?>
                    <option value="<?php echo $row['typeID'] ?>"><?php echo $row['typeName'] ?></option>
                <?php } ?>
            </select>
            <label for="cost" style="font-size: 25px;">ราคาต้นทุน</label>
            <input type="number" id="cost" name="cost" class="form-control" required>
            <label for="sell" style="font-size: 25px;">ราคาที่ต้องการขาย</label>
            <input type="number" id="sell" name="sell" class="form-control" required>
            <label for="count" style="font-size: 25px;">จำนวนสินค้า</label>
            <input type="number" id="count" name="count" class="form-control" required>
            <label for="File" style="font-size: 25px;">อัพโหลดรูป</label>
            <input type="file" class="form-control" id="File" name="ImageFile"/>
            <!--<input type="hidden" name="max_size" value="5000000">
            <label for="sell" style="font-size: 25px;">อัพโหลดไฟล์ภาพ</label>
            <input type="file" name="ImageFile" size="30" class="mt-3">
            <br>
            <font size=2 color=#FF3300>นามสกุล .gif หรือ .jpg (เท่าน้ัน)</font>-->
            <div class="row mt-3">
                <div class="col-md-6 d-flex justify-content-center">
                    <input type="submit" name="submit" value="บันทึก" class="btn btn-success mt-3">
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <a href="productlist.php" class="btn btn-danger mt-3">ยกเลิก</a>
                </div>
            </div>


        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>