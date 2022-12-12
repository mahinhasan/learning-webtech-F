<?php
include '../model/db.php';
?>

<html>

<head>
    <title>Users</title>
</head>

<body>
    <?php include_once('nav.php'); ?>
    <fieldset align="center">
        <legend>All Users</legend>
        <button> <a href="signup.php">Join as new USER</a> </button>
        <br>

        <table align="center" border='3'>
            <tr>
                <th>ID ||</th>
                <th>Name ||</th>&ensp;
                <th>Email ||</th>&nbsp;&nbsp;
                <th>User Type ||</th>&nbsp;&nbsp;
                <th>Update/Delete ||</th>&nbsp;&nbsp;
            </tr>


            <?php
            $sql = "select * from users";
            $con = getConnection();
            $res = mysqli_query($con, $sql);
            if ($res) {
                while ($data = mysqli_fetch_array($res)) {
                    $id = $data['id'];
                    $name = $data['name'];
                    $email = $data['email'];
                    $usertype = $data['usertype'];


                    echo '<tr>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $email . '</td>
                            <td>' . $usertype . '</td>
                            <td>
                                <button><a href="editProducts.php?id=' . $id . '">Update</a></button>
                                <button><a href="deleteProducts.php?id=' . $id . '">Delete</a></button>
                            </td>   
                            </tr>';

                }
            }

            ?>

        </table>
    </fieldset>
</body>

</html>