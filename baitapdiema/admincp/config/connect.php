<?php
    $severname="localhost";
    $username="root";
    $password="";
    $database="shop";

    $connect= new mysqli($severname,$username,$password,$database);
    if(mysqli_connect_errno()){
        echo "loi ket noi".mysqli_connect_error();
        exit();
    }
?>