<?php

if( (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm-password']) ) && (  
    
    !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty('password') && !empty($_POST['confirm-password']))){

    $firstName = $_POST['fname'];
    $lastName  = $_POST['lname'];
    $email = $_POST['email'];
    $status = 0;


    if($_POST['password'] === $_POST['confirm-password']){
        $password = md5($_POST['password']);
        $status = 1;
    }else{
        $error = "password did not macthed";
        header("Location:index.php?msg=$error");
        $status = 0;
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error = "Invalid email format";
        header("Location:index.php?msg=$error");
        $status = 0;
    }
    
    if($status === 1){
        
        // store user data to CSV file
		$user_data = array($firstName, $lastName, $email, $password);
		$file = fopen("users.csv", "a");
		fputcsv($file, $user_data);
		fclose($file);

        // redirect to login page
       header("Location:login.php");

    }
    if($status ===0){
         echo "Invalid Password or Email";
        
    }

    


}else{

    $error = "please fill out all the fields";
    header("Location:index.php?msg=$error");
}