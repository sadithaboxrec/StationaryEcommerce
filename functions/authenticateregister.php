<?php
session_start();

include("../config/DBConnection.php");

if (isset($_POST['registerBtn'])) {

    $username = mysqli_real_escape_string($connection,$_POST['username']) ;
    $email = mysqli_real_escape_string($connection,$_POST['email']) ;
    $phone = mysqli_real_escape_string($connection,$_POST['phone']) ;
    $password = mysqli_real_escape_string($connection,$_POST['password']) ;
    $confirmPassword = mysqli_real_escape_string($connection,$_POST['conPass']) ;


    // check if email exists
    $email_check_query = "SELECT * FROM users WHERE email = '$email' ";
    $email_check_query_sql = mysqli_query($connection, $email_check_query);

    if (mysqli_num_rows($email_check_query_sql) > 0) {
        $_SESSION['message'] = "Email already exists";
        header('Location: ../register.php');
    }

   // password double check
    if($password == $confirmPassword){

            $insert_query = "INSERT INTO users (username,email,phone,password) 
                 VALUES ('$username', '$email', '$phone', '$password')";

            $insert_query_sql = mysqli_query($connection,$insert_query);

            if($insert_query_sql){

                $_SESSION['message'] = "User Registered Successfully";
                header('Location:../login.php');
            
            }else{

                $_SESSION['message'] = "Something went wrong";
                header('Location:../register.php');

            }

    }else{

        $_SESSION['message'] = "Passwords do not match";
        header('Location:../register.php');

    }
}

?>
