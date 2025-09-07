<?php
session_start();
include('config/DBConnection.php');


function getAllRecords($table){

    global $connection;

    $retrieve_all_details_query=" SELECT * FROM $table WHERE availability='1' ";
    return   $retrieve_all_details_query_sql=mysqli_query($connection,$retrieve_all_details_query);
}

function redirect($url,$message){
    
    $_SESSION['message']=$message;
    header('Location:' .$url);
    exit();

}

?>
