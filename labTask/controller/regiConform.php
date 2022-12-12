<?php
    session_start();
    require_once "../model/regiModel.php";
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pswrepeat = $_POST['pswrepeat'];
    $usertype = $_POST['usertype'];


    if($id == ""){
        header('location: ../view/signup.php?err=null');
    }else{      
        
        $user = ['id'=>$id,'name'=>$name, 'email'=>$email,'password'=> $password, 'pswrepeat'=> $pswrepeat,'usertype'=>$usertype,];
        $status = insertUser($user);
        

        if($status){
            header('location: ../view/login.php');
        }else{
           echo "DB error";
        }
    }

?>