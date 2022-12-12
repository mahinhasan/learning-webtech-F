<?php session_start(); ?>
<html >
<head>

    <title>Document</title>
</head>
<body>
<?php include_once('nav.php'); ?>

<?php 
  
//   echo "Welcome: ".$_SESSION['status']['name']."<br>"; 
print_r($_SESSION['status']['id']);   
?>

    <h1>Welcome Home</h1>

</body>
</html>