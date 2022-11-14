<?php
    include 'connect.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "delete from mobile where id=$id";
        $result = mysqli_query($conn,$query) ;
        header('location:index.php');
    }

?>