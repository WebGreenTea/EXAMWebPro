<?php
include('conectDB.php');

$sql = "SELECT producttype.typeID,producttype.typeName,SUM(product.quantity) AS quantity FROM producttype INNER JOIN product ON producttype.typeID=product.typeID  GROUP BY producttype.typeName ORDER BY producttype.typeID";
$type = mysqli_query($conect, $sql);
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
                <div class="d-flex justify-content-center mb-5">
                    <h1>สินค้าคงเหลือแต่ละประเภท</h1>
                </div>
                
                <div class="row ">
                    <div class="col-md-2 d-flex justify-content-center">

                    </div>
                    <div class="col-md-2 d-flex justify-content-center border">
                        <h5>ID ประเภทสินค้า</h5>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center border">
                    <h5>ชื่อประเภทสินค้า</h5>
                    </div>

                    <div class="col-md-3 d-flex justify-content-center border">
                    <h5>จำนวนสินค้าคงเหลือรวม (ชิ้น)</h5>
                    </div>

                    <div class="col-md-2 d-flex justify-content-center">

                    </div>

                </div>
                <?php $total = 0; ?>
                <?php while ($row = mysqli_fetch_array($type)) { ?>
                <?php $total += $row['quantity'];?>
                    <div class="row ">
                        <div class="col-md-2 d-flex justify-content-center">

                        </div>
                        <div class="col-md-2 d-flex justify-content-center border p-2">
                            <?php echo $row['typeID']; ?>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center border p-2">
                            <?php echo $row['typeName']; ?>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center border p-2">
                            <?php echo $row['quantity'];?>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">

                        </div>

                    </div>
                <?php } ?>
                <div class="row">
                    <div class="col-md-7 d-flex justify-content-end p-2">
                        <h5>รวมสินค้าคงเหลือทั้งสิน:</h5>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center border p-2">
                        <?php echo $total ?>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>