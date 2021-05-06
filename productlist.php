<?php
include('conectDB.php');

$sql = "SELECT * FROM product";
$product = mysqli_query($conect, $sql);
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
    <div class="container mt-5">
        <a href="menu.php" class="btn btn-primary">
            < กลับหน้าหลัก</a>
                <div class="d-flex justify-content-center">
                    <h1>รายการสินค้าทั้งหมด</h1>
                </div>
                <div class="row mt-3">
                    <div class="col-md-10">
                    </div>
                    <div class="col-md-2">
                        <a href="addproduct.php" class="btn btn-success mb-3">+ เพิ่มสินค้าใหม่</a>
                    </div>

                </div>
                <div class="row  border-bottom">
                    <div class="col-md-1 d-flex justify-content-center ">
                        <h6>ID</h6>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <h6>ชื่อสินค้า</h6>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <h6>ประเภทสินค้า</h6>
                    </div>
                    <div class="col-md-1 d-flex justify-content-center">
                        <h6>จำนวนสินค้า</h6>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <h6>ราคาต้นทุน</h6>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <h6>ราคาขาย</h6>
                    </div>
                </div>
                <?php while ($row = mysqli_fetch_array($product)) { ?>
                    <div class="row  border-bottom">
                        <div class="col-md-1 d-flex justify-content-center align-items-center p-2">
                            <?php echo $row['productID']; ?>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center align-items-center p-2">
                            <?php echo $row['productName']; ?>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center align-items-center p-2">
                            <?php
                            $typeid = $row['typeID'];
                            $sql = "SELECT typeName FROM producttype WHERE typeID=$typeid";
                            $type = mysqli_query($conect, $sql);
                            $type = mysqli_fetch_array($type);
                            ?>
                            <?php echo $type['typeName']; ?>
                        </div>
                        <div class="col-md-1 d-flex justify-content-center align-items-center p-2">
                            <?php echo $row['quantity']; ?>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center align-items-center p-2">
                            <?php echo number_format($row['cost']); ?>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center align-items-center p-2">
                            <?php echo number_format($row['sell']); ?>
                        </div>
                        <div class="col-md-1 d-flex justify-content-center align-items-center p-2">
                            <a href="editproduct.php?id=<?php echo $row['productID'] ?>" class="btn btn-info ">แก้ไข</a>
                        </div>
                        <div class="col-md-1 align-items-center p-2">
                            <a href="delProduct.php?id=<?php echo $row['productID'] ?>" class="btn btn-danger ">ลบ</a>
                        </div>
                    </div>
                <?php } ?>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>