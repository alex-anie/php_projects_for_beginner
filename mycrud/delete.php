<?php
    include 'connect.php';

    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql = "delete from `mycrud` where id=$id";
        $result = mysqli_query($connection, $sql);

        if($result){
            header('location:user.php');
        }else {
            die(mysqli_error($con));
        }
    }
?>