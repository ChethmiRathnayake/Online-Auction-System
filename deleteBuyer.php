<?php
include 'connect.php';
if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "delete from buyer where BID=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        //echo "Deleted successfully";
        header('location:admin.php');
    }else{
        die(mysqli_error($con));
    }
}
?>