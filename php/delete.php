<?php

include 'connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM volunteer WHERE id='$id'";
    $reslut= mysqli_query($conn,$sql);
    if($reslut){
        header('location:show.php');
    }else{
        echo "error";
    }
}