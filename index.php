<?php

    if(isset($_GET['msg'])){
        $error = $_GET['msg'];

    }else{
        $error = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>

    <div class="registration-form">
        <h3>Registration Form</h3>
        <form action="process.php" method="post">
            <label for="fname">First Name</label><br><br>
            <input type="text" id="fname" name="fname" placeholder="Enter your first name..." required>
            <br><br>
            <label for="lname">Last Name</label><br><br>
            <input type="text" id="lname" name="lname" placeholder="Enter your last name..." required><br><br>
            <label for="email">Email Address</label><br><br>
            <input type="email" id="email" name="email" placeholder="Enter email address..." required><br><br>
            <label for="password">Password</label><br><br>
            <input type="password" id="password" name="password" placeholder="Enter Password..." required><br><br>
            <label for="confirm-password">Confirm Password</label><br><br>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Re Enter your password..." required><br><br>
            <br><br>
            <span style="color:red;"><?=$error;?></span><br>
            <br><br>
            <button type="submit">Register</button>
        </form>

    </div>

</body>
</html>