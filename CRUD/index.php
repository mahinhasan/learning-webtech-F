<?php
    include 'connect.php';
?>



<html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
</head>
<body>

<h2>View Records</h2>
<fieldset>
<legend>PRODUCT</legend>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>ID</strong></th>
<th><strong>Name</strong></th>
<th><strong>Buying Price</strong></th>
<th><strong>Seling Price</strong></th>
<th><strong>Profit</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php


$sel_query="select * from mobile";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_array($result)) { ?>
<td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["bprice"]; ?></td>
<td align="center"><?php echo $row["sprice"]; ?></td>
<td align="center"><?php echo $row["profit"]; ?></td>
<td align="center">
<a href="editProducts.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</fieldset>;
</body>
</html>