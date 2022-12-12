<?php
    session_start();
    require_once "../model/loginModel.php";

    $id = $_POST['id'];
    $password = $_POST['password'];

    if($id == "" || $password == ""){
        header('location: ../view/login.php?err=null');
    }else{

        $user = ['id'=> $id, 'password'=>$password];
        $status = login($user);
        if($status){
            setcookie('status', 'true', time()+3600, '/');
            $_SESSION['status'] = $status;

            header('location: ../view/index.php');
        }else{
            header('location: ../views/login.php?err=invalid');
        }
    }
?>