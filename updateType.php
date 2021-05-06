<?php
    include('conectDB.php');
    $type = $_POST['type'];
    $id = $_POST['id'];
    $sql = "UPDATE `producttype` SET typeName='$type' WHERE typeID=$id";
    mysqli_query($conect,$sql);
    header('location: typelist.php')
?>