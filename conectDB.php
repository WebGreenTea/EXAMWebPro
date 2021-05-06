<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phonesell";
  
    $conect = mysqli_connect($servername,$username,$password,$dbname);
   mysqli_set_charset($conect, "utf8");
    if(!$conect){
        die("fail".mysqli_connect_error());
    }
?>

