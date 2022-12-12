<!-- <?php
include '../../views/header.php';
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotel</title>
    <link rel="stylesheet" href="../assets/css/SignupCss.css">
</head>

<body>
    <?php require 'index.php'; ?>

    <div class="wrapper login">
        <div class="container">
        <div class="col-left">
                <div class="login-text">
                    <h2>Welcome!</h2>
                    <p>Add Your Hotel Description<br>For Free!</p>
                   
                </div>
            </div>

            <div class="col-right">
                <div class="signup-form">
                    <h2>Hotel</h2>
                    <form method="post" action="../controllers/hotel/hotelCheck.php" enctype="multipart/form-data">
                        <p>
                            <label>Hotel Name<span>*</span></label>
                            <input type="text" placeholder="Hotel Name: " name="name" required>
                        </p>
                        <p>
                            <label>Location: <span>*</span></label>
                            <input type="text" placeholder="Hotel Locaiton" name="locaiton" required>
                        </p>
                        <p>
                            <label>Mobile<span>*</span></label>
                            <input type="text" placeholder="Enter mobile" name="mobile" required>
                        </p>

                        <p>
                            <label for="cars">Choose a class:</label>

                            <select name="class" id="cars">
                                <option value="first">first</option>
                                <option value="second">second</option>
                                <option value="other">Other</option>
                                
                            </select>
                        </p>

                        <p>
                            <label>Rent<span>*</span></label><br>
                            <input type="text" placeholder="Enter Rent" name="rent" required>
                        </p>

                        <p>
                            <input type="submit" value="Sign In">
                        </p>
                        <p>
                            <a href="">Forgot password?</a>
                        </p>

                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

</html>