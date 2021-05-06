<?php
    include('conectDB.php');
    $name = $_POST['pdname'];
    $typeID = $_POST['type'];
    $cost = $_POST['cost'];
    $sell = $_POST['sell'];
    $count = $_POST['count'];

    $sql = "INSERT INTO `product` (productID,typeID,productName,quantity,cost,sell) VALUE (NULL,$typeID,'$name',$count,$cost,$sell)";
    mysqli_query($conect,$sql);
    header('location: productlist.php')
?>