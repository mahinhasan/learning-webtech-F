<?php
include 'connect.php';
$id=$_GET['id'];
$query = "SELECT * from mobile where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_array($result);


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>

</head>
<body>

<h1>Update Record</h1>


<?php

$id  = $_GET['id'];
$sel_query="select * from mobile  where id=$id";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_array($result)) { ?>
<form name="form" method="post" action="updatecheck.php"> 
<p><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="bprice" placeholder="Enter Name" 
required value="<?php echo $row['bprice'];?>" /></p>
<p><input type="text" name="sprice" placeholder="Enter Name" 
required value="<?php echo $row['sprice'];?>" /></p>


<p><input name="submit" type="submit" value="Update" /></p>
</form>


</tr>
<?php } ?>


<div>


</div>
</div>
</body>
</html>