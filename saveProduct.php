<?php
    include('conectDB.php');
    $name = $_POST['pdname'];
    $typeID = $_POST['type'];
    $cost = $_POST['cost'];
    $sell = $_POST['sell'];
    $count = $_POST['count'];
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
            move_uploaded_file($tmp, "pictures/$filename");
            unlink($tmp);
            $sql = "INSERT INTO `product` (productID,typeID,productName,quantity,cost,sell,img) VALUE (NULL,$typeID,'$name',$count,$cost,$sell,'$filename')";
            //$sql = "UPDATE `product` SET typeID=$typeID, productName='$name',quantity=$count,cost=$cost,sell=$sell,img='$filename'  WHERE productID=$id";
        } else {
            $sql = "INSERT INTO `product` (productID,typeID,productName,quantity,cost,sell) VALUE (NULL,$typeID,'$name',$count,$cost,$sell)";
        }
    } else {
        $sql = "INSERT INTO `product` (productID,typeID,productName,quantity,cost,sell) VALUE (NULL,$typeID,'$name',$count,$cost,$sell)";
    }
    
    mysqli_query($conect,$sql);
    header('location: productlist.php')
?>