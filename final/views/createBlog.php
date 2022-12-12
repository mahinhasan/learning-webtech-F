<?php 



?>


<html>
<head>
    <title>Blog</title>
</head>
<body>
    <?php include_once('index.php');?>

        <form method="post" action="../controllers/blog/blogCheck.php" enctype="">
            <fieldset>
                <legend>Create Blog</legend>    
                Title Here: <input type="text" name="title" value=""/> <br>
                Body Of Content: <textarea name="content" id="" cols="30" rows="10"></textarea>
                <input type="submit" name="btn" value="Submit"/>
            </fieldset>
        </form>
</body>
</html>