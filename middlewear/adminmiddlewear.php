<?php
include('../functions/storefunctions.php');

if(isset($_SESSION['authentication'])){

    if($_SESSION['role'] != 1 ){

        redirect('../index.php', "Not authorized for customers to be here.");

    }

}else{
            redirect('../login.ph', "Login to continue for the dashboard");

}
?>