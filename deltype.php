<?php
include('conectDB.php');
$id = $_GET['id'];
$sql = "DELETE FROM `producttype` WHERE typeID=$id";
mysqli_query($conect,$sql);
header('location: typelist.php');
?>