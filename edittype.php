<?php
include('conectDB.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM producttype WHERE typeID=$id";
    $producttype = mysqli_query($conect, $sql);
    $producttype = mysqli_fetch_array($producttype);
} else {
    header('location: typelist.php');
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
            <h1>แก้ไขข้อมูลประเภทสินค้า</h1>
        </div>

        <form action="updateType.php" method="post">
            <label for="type" style="font-size: 25px;">ชื่อสินค้า</label>
            <input type="text" id="type" name="type" class="form-control" required value="<?php echo $producttype['typeName'] ?>">
            

            <div class="row mt-3">
                <div class="col-md-6 d-flex justify-content-center">
                    <input type="hidden" name="id" value="<?php echo $producttype['typeID'] ?>">
                    <input type="submit" name="submit" value="บันทึก" class="btn btn-success mt-3">
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <a href="typelist.php" class="btn btn-danger mt-3">ยกเลิก</a>
                </div>
            </div>

        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>