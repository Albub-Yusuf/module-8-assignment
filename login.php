<?php
if(isset($_GET['notification'])){
    $notification = $_GET['notification'];

}else{
    $notification = "";
}


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
    <title>Users Login</title>
</head>
<body>
    <div class="notification">

          <h4 style="color:green;"><?=$notification;?></h4><br>    
    </div>
    <div class="login">
        <h3>Login Form</h3>
        <form action="actions.php" method="post">
            <label for="email">Email</label><br><br>
            <input type="email" name="email" id="email" placeholder="enter email address..." required><br><br>
            <label for="password">Password</label><br><br>
            <input type="password" name="password" id="password" placeholder="enter password..." required><br>
            <br><br>
            <span style="color:red;"><?=$error;?></span><br>
            <br><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>