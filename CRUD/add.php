


<!DOCTYPE html>
<html lang="en">

<head>
    <title>products</title>
</head>

<body>
    <fieldset>
        <legend>PRODUCT</legend>
        <form method="POST" action="addCheck.php">
            <label for="itemname">Iteam Name:</label>
            <input type="text" id="itemname" name="iteamname"><br><br>
            <label for="buy">Buying price:</label>
            <input type="number" id="buy" name="buy"><br><br>
            <label for="sell">Selling price:</label>
            <input type="number" id="sell" name="sell"><br><br>
            <hr>
            <input type="checkbox" id="display" name="display">
            <label for="display"> Display</label><br><br>
            <input type="submit" value="Submit">
        </form>
    </fieldset>
</body>
</html>