<?php
    
    $conn = mysqli_connect('localhost','root','','Mobile');

    if($conn){
        echo "Successfully connected!";
    }
    else{
        die(mysqli_error($conn));
    }
?>