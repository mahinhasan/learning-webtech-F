<?php
    include 'connect.php';
    $pname = $_POST['iteamname'];
    $bprice = $_POST['buy'];
    $sprice = $_POST['sell'];
    $profit = $sprice - $bprice;
  
    //echo "Product : ".$pname."<br>"." Buy Price : ".$bprice."<br>"." Selling Price : ".$sprice;  
    
    $data = "INSERT INTO mobile  VALUES ('{$pname}', '{$bprice}', '{$sprice}', '{$profit}');";
    $result = mysqli_query($conn,$data);

    if($result){
        header('location:index.php.php');
    }
    else{
        echo "Error";
    }




?>