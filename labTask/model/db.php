<?php 

    $host = "localhost";
    $dbname= "Lab";
    $dbpass = "";
    $dbuser = "root";

    function getConnection(){
        global $host;
        global $dbname;
        global $dbpass;
        global $dbuser;
        return $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    }

?>