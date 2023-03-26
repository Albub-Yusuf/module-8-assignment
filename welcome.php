<?php
session_start();
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
   <h3>Welcome  <?=$user?>!!</h3>
   <br><br>
   <form action="logout" method="POST">
    <button type="submit" value="submit">Logout</button>
   </form>
</body>
</html>