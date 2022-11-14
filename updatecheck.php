<?php
	include('connect.php');
	$id=$_GET['id'];
 
	$name=$_POST['name'];
	$bprice=$_POST['bprice'];
    $sprice=$_POST['sprice'];
    $profit = $sprice - $bprice;
	mysqli_query($conn,"update `mobile` set id='$id', name='$name', bprice='$bprice', sprice='$sprice' ,profit ='$profit' where id='$id'");
	header('location:index.php');
?>