<?php
require_once "db.php";



function insertUser($user)
{
    $con = getConnection();
    $sql = "insert into users values('{$user['id']}', '{$user['name']}', '{$user['email']}', '{$user['password']}','{$user['pswrepeat']}','{$user['usertype']}')";
    $status = mysqli_query($con, $sql);
    return $status;
}

function editUser($user)
{

}

function deleteUser($user)
{

}

function allUser($user)
{

}

function getUserById($id)
{

}
?>