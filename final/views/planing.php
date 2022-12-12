<?php include('navbar.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/planing.css">
    <title>planing</title>
</head>

<body>
   
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="createPlane.php">Create Plane</a>
        <a href="#">Runnig</a>
        <a href="#">Contact</a>
    </div>

    
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>

</html>