<?php
include('conectDB.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM product WHERE productid=$id";
    $product = mysqli_query($conect, $sql);
    $product = mysqli_fetch_array($product);
} else {
    header('location: productlist.php');
}

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
            <h1>แก้ไขข้อมูลสินค้า</h1>
        </div>

        <form  action="updatePD.php" method="post" enctype="multipart/form-data">
            <label for="pdname" style="font-size: 25px;">ชื่อสินค้า</label>
            <input type="text" id="pdname" name="pdname" class="form-control" required value="<?php echo $product['productName'] ?>">
            <label for="type" style="font-size: 25px;">ประเภทสินค้า</label>
            <?php
            $typePD = $product['typeID'];
            $sql = "SELECT * FROM producttype WHERE NOT typeID=$typePD";
            $type = mysqli_query($conect, $sql);
            ?>
            <select name="type" id="type" class="form-select" required>
                <?php $sql = "SELECT * FROM producttype WHERE typeID=$typePD";
                $thistype = mysqli_query($conect, $sql);
                $thistype = mysqli_fetch_array($thistype);
                ?>
                <option value="<?php echo $product['typeID'] ?>" selected><?php echo $thistype['typeName'] ?></option>
                <?php while ($row = mysqli_fetch_array($type)) { ?>
                    <option value="<?php echo $row['typeID'] ?>"><?php echo $row['typeName'] ?></option>
                <?php } ?>
            </select>
            <label for="cost" style="font-size: 25px;">ราคาต้นทุน</label>
            <input type="number" id="cost" name="cost" class="form-control" required value="<?php echo $product['cost'] ?>">
            <label for="sell" style="font-size: 25px;">ราคาที่ตต้องการขาย</label>
            <input type="number" id="sell" name="sell" class="form-control" required value="<?php echo $product['sell'] ?>">
            <label for="count" style="font-size: 25px;">จำนวนสินค้า</label>
            <input type="number" id="count" name="count" class="form-control" required value="<?php echo $product['quantity'] ?>">
            <label for="File" style="font-size: 25px;">อัพโหลดรูป</label>
            <input type="file" class="form-control" id="File" name="ImageFile"/>

            <div class="row mt-3">
                <div class="col-md-6 d-flex justify-content-center">
                    <input type="hidden" name="id" value="<?php echo $product['productID'] ?>">
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