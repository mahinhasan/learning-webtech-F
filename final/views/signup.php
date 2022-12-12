<!-- <?php
include '../../views/header.php';
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
    <link rel="stylesheet" href="../assets/css/SignupCss.css">
</head>

<body>
    <?php require 'index.php'; ?>

    <div class="wrapper login">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Welcome!</h2>
                    <p>Create your account.<br>For Free!</p>
                    <p>If you already signup</p><a href="login.php" class="btn">login</a>
                </div>
            </div>

            <div class="col-right">
                <div class="signup-form">
                    <h2>Sign Up</h2>
                    <form method="post" action="../controllers/users/regiCheck.php" enctype="multipart/form-data">
                        <p>
                            <label>Username/Email address<span>*</span></label>
                            <input type="text" placeholder="Username or Email" name="username" required>
                        </p>
                        <p>
                            <label>Password<span>*</span></label>
                            <input type="password" placeholder="Password" name="password" required>
                        </p>
                        <p>
                            <label>Re type-password<span>*</span></label>
                            <input type="password" placeholder="Password" name="rpassword" required>
                        </p>
                        <p>
                            <label>Email address<span>*</span></label>
                            <input type="text" placeholder="Email" name="email" required>
                        </p>
                        <p>
                            <label>Phone Number<span>*</span></label>
                            <input type="text" placeholder="Phone Number" name="phone" required>
                        </p>
                        <p>
                            <label>Select gender<span>*</span></label><br>
                            <label for="male">Male</label>
                            <input type="radio" name="gender" id="male" value="male" checked>
                            <label for="female">Female</label>
                            <input type="radio" name="gender" id="female" value="female">
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