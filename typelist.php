<?php
include('conectDB.php');
$sql = "SELECT * FROM producttype";
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
                <div class="d-flex justify-content-center">
                    <h1>รายการประเภทสินค้าทั้งหมด</h1>
                </div>

                <div class="row mt-3 mb-3">
                    <div class="col-md-9">
                    </div>
                    <div class="col-md-2">
                        <a href="addtype.php" class="btn btn-success">+ เพิ่มประเภทสินค้าใหม่</a>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-2 d-flex justify-content-center border-bottom">
                        <h5>ID</h5>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center border-bottom">
                        <h5>ชื่อประเภท</h5>
                    </div>
                    <div class="col-md-2 border-bottom">
                    </div>
                    <div class="col-md-2 border-bottom">
                    </div>


                </div>
                <?php while ($row = mysqli_fetch_array($type)) { ?>
                    <div class="row  ">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-2 d-flex justify-content-center border-bottom align-items-center p-2">
                            <?php echo $row['typeID']; ?>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center border-bottom align-items-center p-2">
                            <?php echo $row['typeName']; ?>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center border-bottom align-items-center p-2">
                            <a href="edittype.php?id=<?php echo $row['typeID'] ?>" class="btn btn-info ">แก้ไข</a>
                        </div>
                        <div class="col-md-2 d-flex justify-content-start border-bottom align-items-center p-2">
                            <a href="deltype.php?id=<?php echo $row['typeID'] ?>" class="btn btn-danger ">ลบ</a>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                <?php } ?>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>