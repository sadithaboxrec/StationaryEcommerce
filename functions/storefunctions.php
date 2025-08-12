<?php

include('../config/DBConnection.php');


function getAllDetails($table){

    global $connection;

    $retrieve_all_details_query=" SELECT * FROM $table ";
    return   $retrieve_all_details_query_sql=mysqli_query($connection,$retrieve_all_details_query);
}

function redirect($url,$message){
    
    $_SESSION['message']=$message;
    header('Location:' .$url);
    exit();

}

?>