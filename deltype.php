<?php
include('conectDB.php');
$id = $_GET['id'];
$sql = "DELETE FROM `producttype` WHERE typeID=$id";
if(!mysqli_query($conect,$sql)){
    header('location: typelist.php?delError=1');
}else{
    header('location: typelist.php');
}


?>