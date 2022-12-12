<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php include_once('nav.php'); ?>

    <fieldset>
        <legend> <b> LOGIN </b></legend>
        <form action="../controller/loginConform.php" method="post">


            <div class="container">
                <label for="id"><b>Enter ID</b></label><br>
                <input type="text" placeholder="Enter Username" name="id" required><br>

                <label for="password"><b>Password</b></label><br>
                <input type="password" placeholder="Enter Password" name="password" required><br>

                <input type="submit" value="Login"><br>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
            <hr>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span><br>
            </div>
        </form>
    </fieldset>
</body>

</html>