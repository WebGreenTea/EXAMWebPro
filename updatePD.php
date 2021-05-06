<?php
    include('conectDB.php');
    $name = $_POST['pdname'];
    $typeID = $_POST['type'];
    $cost = $_POST['cost'];
    $sell = $_POST['sell'];
    $count = $_POST['count'];
    $id = $_POST['id'];

    $sql = "UPDATE `product` SET typeID=$typeID, productName='$name',quantity=$count,cost=$cost,sell=$sell  WHERE productID=$id";
    mysqli_query($conect,$sql);
    header('location: productlist.php')
?>