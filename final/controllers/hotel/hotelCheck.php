<?php
    session_start();
    // include "db.php";
    // include_once "db.php";
    // require "db.php";
    require_once "../../models/hotel.php";

    $name = $_POST['name'];
    $location = $_POST['location'];
    $mobile = $_POST['mobile'];
    $class = $_POST['class'];
    $rent = $_POST['rent'];

    if($name == "" || $location == ""){
        header('location: ../../views/hotel.php');
    }else{

        $hotel = ['','name'=> $name, 'location'=>$location,'mobile'=>$mobile,'class'=>$class,'rent'=>$rent];
        $status = addHotel($hotel);
        if($status){
            setcookie('status', 'true', time()+3600, '/');
            header('location: ../../views/index.php');
        }else{
            header('location: ../../views/hotel.php');
        }
    }
?>