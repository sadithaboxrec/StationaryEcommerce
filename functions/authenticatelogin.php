<?php
session_start();

include("../config/DBConnection.php");

if (isset($_POST['loginBtn'])) {

    $email = mysqli_real_escape_string($connection,$_POST['email']) ;
    $password = mysqli_real_escape_string($connection,$_POST['password']) ;

    $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password' ";
    $login_query_sql= mysqli_query($connection,$login_query);

    if(mysqli_num_rows($login_query_sql) >0 ){

        $_SESSION['authentication'] = true;

        $userdata=mysqli_fetch_array($login_query_sql);
        $username=$userdata['username'];
        $useremail =$userdata['email'];
        $role=$userdata['role'];


        $_SESSION['authentication_user'] = [
            'name' => $username,
            'email' =>$useremail

        ];

        // for admin login
        $_SESSION['role']=$role;

        if($role){

                $_SESSION['message'] = "Admin Logged, Welcome!";
                header('Location:../admin/index.php');
        }else{

                $_SESSION['message'] = "Login Success";
                header('Location:../index.php');
        }




    }else{

                $_SESSION['message'] = "Login Details Are invalid";
                header('Location:../login.php');
    }


    }


?>
