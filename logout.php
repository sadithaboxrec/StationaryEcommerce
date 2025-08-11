<?php

session_start();

if(isset($_SESSION['authentication'])){

    unset($_SESSION['authentication']);
    unset($_SESSION['authentication_user']);

    $_SESSION['message'] = "Logged Out Successfully";
}

header('Location:index.php');

?> 