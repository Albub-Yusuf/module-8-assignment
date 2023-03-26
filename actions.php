<?php

 if((isset($_POST['email'])  && isset($_POST['password']) ) && (!empty($_POST['email']) && !empty($_POST['password']) ) ){
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $user = "";
    $flag=0;

        // Define the file path to the CSV file
        $file_path = 'users.csv';

        // Check if the file exists
        if(!file_exists($file_path)){
            die('CSV file not found!');
        }


    // Open the CSV file for reading
    $file_handle = fopen($file_path, "r");

    
    while (($data = fgetcsv($file_handle, 1000, ",")) !== FALSE) {
        
        if($data[2] == $email && $data[3] == $password){
           
             $user = $data[0];
            $flag = 1;
            break;
        }else{
            $flag = 0; 
        }
    }

    // Close the CSV file handle
    fclose($file_handle);

    if($flag === 1){
        
        session_start();
        $_SESSION['user'] = $user;
        header("Location:welcome.php");
        
    }
    if($flag === 0){
       $error = "Invalid Email or Password!!!";
       header("Location:login.php?msg=$error");

    }


}else{
    $error = "Please fill out email and password fields";
    header("Location:login.php?msg=$error");
}
?>

