<?php

require_once "db.php";
require_once "../controllers/gallery/galleryCheck.php";

function insertBlog($blogPost){
    $conn = getConnection();
    $sql = "INSERT INTO images(image_url) VALUES('$new_img_name')";
    $status = mysqli_query($conn, $sql);
    return $status;

}



?>