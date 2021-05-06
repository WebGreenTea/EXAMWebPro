<?php
include('conectDB.php');
$id = $_GET['id'];
$sql = "DELETE FROM `product` WHERE productID=$id";
mysqli_query($conect,$sql);
header('location: productlist.php');
?>