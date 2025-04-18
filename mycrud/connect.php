<?php
    $connection = new mysqli('localhost', 'root', '', 'myform');

    if($connection){
        echo "Successful";
    } else {
        die(mysqli_error($connection));
    }

?>