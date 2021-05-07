<?php
include('conectDB.php');
$name = $_POST['pdname'];
$typeID = $_POST['type'];
$cost = $_POST['cost'];
$sell = $_POST['sell'];
$count = $_POST['count'];
$id = $_POST['id'];
$file = $_FILES['ImageFile'];

if (strlen($file['name']) > 0) {
    $filename = $file['name'];
    $type = $file['type'];
    $size = $file['size'];
    $tmp = $file['tmp_name'];
    if ($type == "image/png" or $type == "image/jpeg" or $type == "image/webp") {
        $fileExt = explode('.', $filename);
        $fileActualExt = strtolower(end($fileExt));
        $filename = uniqid('', true) . "." . $fileActualExt;
        copy($tmp, "pictures/$filename");
        unlink($tmp);
        $sql = "UPDATE `product` SET typeID=$typeID, productName='$name',quantity=$count,cost=$cost,sell=$sell,img='$filename'  WHERE productID=$id";
    } else {
        $sql = "UPDATE `product` SET typeID=$typeID, productName='$name',quantity=$count,cost=$cost,sell=$sell  WHERE productID=$id";
    }
} else {
    $sql = "UPDATE `product` SET typeID=$typeID, productName='$name',quantity=$count,cost=$cost,sell=$sell  WHERE productID=$id";
}


mysqli_query($conect, $sql);
header('location: productlist.php');
