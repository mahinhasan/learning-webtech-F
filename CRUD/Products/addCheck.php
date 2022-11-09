<?php

    $pname = $_POST['iteamname'];
    $bprice = $_POST['buy'];
    $sprice = $_POST['sell'];
    $profit = $sprice - $bprice;
    $conn = mysqli_connect('localhost','root','','Mobile');
    //echo "Product : ".$pname."<br>"." Buy Price : ".$bprice."<br>"." Selling Price : ".$sprice;  
    
    $data = "INSERT INTO phone  VALUES ('{$pname}', '{$bprice}', '{$sprice}', '{$profit}');";
    $result = mysqli_query($conn,$data);

    if($result){
        header('location:diplayProducts.php');
    }
    else{
        echo "Error";
    }




?>