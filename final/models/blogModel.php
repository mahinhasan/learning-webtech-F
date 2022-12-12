<?php

require_once "db.php";

function insertBlog($blogPost){
    $conn = getConnection();
    $sql = "insert into `blogs` (title,content) values('{$blogPost['title']}','{$blogPost['content']}')";
    $status = mysqli_query($conn, $sql);
    return $status;

}

function displayAllBlog(){
    $conn = getConnection();
    $sql = "select * from blogs";
    $res = mysqli_query($conn, $sql);
    return $res;
}

function displayAllTable(){
    $conn = getConnection();
    $sql = "select * from blogs";
    $blog = mysqli_query($conn, $sql);
    return $blog;
}


?>