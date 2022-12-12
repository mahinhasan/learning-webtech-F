<?php
session_start();
require_once "../../models/blogModel.php";

$title = $_POST['title'];
$content = $_POST['content'];

if ($title == "" || $content == "") {
    header('location: ../../views/index.php');
} else {

    $blogPost = ['title' => $title, 'content' => $content];
    $status = insertBlog($blogPost);

    if (!$status) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
}

?>