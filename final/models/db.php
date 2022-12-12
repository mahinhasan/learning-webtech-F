<?php

$host = "localhost";
$dbname = "Tourism";
$dbpass = "";
$dbuser = "root";

function getConnection()
{
    global $host;
    global $dbname;
    global $dbpass;
    global $dbuser;

    $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    if ($con) {
        return $con;
    } else {
        die(mysqli_errno($con));
    }
    
}

// getConnection();

?>