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
    <a href="menu.php" class="btn btn-primary">< กลับหน้าหลัก</a>
        <h2 class="d-flex justify-content-center">อธิบายการทำงานของโปรแกรมการจัดการร้านขายโทรศัพท์และอื่นๆ</h2>
        <h4 class="mt-3 text-success">1) 62-060216-1007-2 นายสหวุฒิ บุญยืน ตอนที่ 2 ลำดับที่ 6</h4>
        <h4>2) ชื่อโปรแกรม: โปรแกรมการจัดการร้านขายโทรศัพท์และอื่นๆ</h4>
        <h4>3) ชื่อฐานข้อมูล: phonesell </h4>
        <h4>4)ฐานข้อมูล phonesell ของโปรแกรม ประกอบด้วยตารางดังนี้</h4>
        <p> - ตารางประเภทสินค้า ประกอบด้วย attribute ดังนี้</p>
        <div class="row">
            <div class="col-md-1 border">
                #
            </div>
            <div class="col-md-3 border">
                Attribute Name
            </div>
            <div class="col-md-3 border">
                Detail
            </div>
            <div class="col-md-2 border">
                Data Type
            </div>
            <div class="col-md-3 border">
                Key
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 border">
                1
            </div>
            <div class="col-md-3 border">
                typeID
            </div>
            <div class="col-md-3 border">
                รหัสประเภทสินค้า
            </div>
            <div class="col-md-2 border">
                int
            </div>
            <div class="col-md-3 border">
                primary key
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 border">
                2
            </div>
            <div class="col-md-3 border">
                typeName
            </div>
            <div class="col-md-3 border">
                ชื่อประเภทสินค้า
            </div>
            <div class="col-md-2 border">
                varchar (25)
            </div>
            <div class="col-md-3 border">

            </div>
        </div>
        <br>
        <p>- ตารางสินค้า ประกอบด้วย attribute ดังนี้</p>
        <div class="row">
            <div class="col-md-1 border">
                #
            </div>
            <div class="col-md-3 border">
                Attribute Name
            </div>
            <div class="col-md-3 border">
                Detail
            </div>
            <div class="col-md-2 border">
                Data Type
            </div>
            <div class="col-md-3 border">
                Key
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 border">
                1
            </div>
            <div class="col-md-3 border">
                productID
            </div>
            <div class="col-md-3 border">
                รหัสสินค้า
            </div>
            <div class="col-md-2 border">
                int
            </div>
            <div class="col-md-3 border">
                primary key
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 border">
                2
            </div>
            <div class="col-md-3 border">
                typeID
            </div>
            <div class="col-md-3 border">
                รหัสประเภทสินค้า
            </div>
            <div class="col-md-2 border">
                int
            </div>
            <div class="col-md-3 border">
            foreign key
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 border">
                3
            </div>
            <div class="col-md-3 border">
            productName
            </div>
            <div class="col-md-3 border">
            ชื่อสินค้า
            </div>
            <div class="col-md-2 border">
            varchar(25)
            </div>
            <div class="col-md-3 border">
            
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 border">
                4
            </div>
            <div class="col-md-3 border">
            quantity
            </div>
            <div class="col-md-3 border">
            จํานวนสินค้า
            </div>
            <div class="col-md-2 border">
            int
            </div>
            <div class="col-md-3 border">
            
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 border">
                5
            </div>
            <div class="col-md-3 border">
            cost
            </div>
            <div class="col-md-3 border">
            ราคาทุน/หน่วย
            </div>
            <div class="col-md-2 border">
            int
            </div>
            <div class="col-md-3 border">
            
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 border">
                6
            </div>
            <div class="col-md-3 border">
            sell
            </div>
            <div class="col-md-3 border">
            ราคาขาย/หน่วย
            </div>
            <div class="col-md-2 border">
            int
            </div>
            <div class="col-md-3 border">
            
            </div>
        </div>

        <h4 class="mt-3">
        5)โปรแกรมสามารถทํางานได้ ดังนี้
        </h4>
        <p> - สินค้า สามารถ เพิ่ม แก้ไข และลบได้</p>
        <p> - ประเภทสินค้า สามารถ เพิ่ม แก้ไข และลบได้</p>
        <p> - ออกรายงานสินค้าคงเหลือของแต่ละประเภทได้</p>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>