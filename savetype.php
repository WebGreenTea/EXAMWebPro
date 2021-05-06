<?php
    include('conectDB.php');
    $type = $_POST['type'];
    

    $sql = "INSERT INTO `producttype` (typeID,typeName) VALUE (NULL,'$type')";
    mysqli_query($conect,$sql);
    header('location: typelist.php')
?>