<?php 
    require_once "db.php";

    function login($user){
        $con = getConnection();
        $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count > 0){
            return true;
        }else{
            return false;
        }
    }

    function addHotel($hotel){
        $con = getConnection();
        $sql = "insert into hotel values('', '{$hotel['name']}', '{$hotel['location']}', '{$hotel['mobile']}', '{$hotel['class']}', '{$hotel['rent']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function editUser($user){
       
    }

    function deleteUser($user){
       
    }

    function allUser($user){
       
    }

    function getUserById($id){
       
    }
?>