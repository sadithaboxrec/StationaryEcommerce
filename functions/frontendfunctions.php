<?php
session_start();
include('config/DBConnection.php');


function getAllRecords($table){

    global $connection;

    $retrieve_all_details_query=" SELECT * FROM $table WHERE availability='1' ";
    return   $retrieve_all_details_query_sql=mysqli_query($connection,$retrieve_all_details_query);
}

function getAvailableDetailsById($table,$name){

    global $connection;

    $retrieve_available_details_query=" SELECT * FROM $table WHERE name='$name' AND availability='1' LIMIT 1 ";
    return   $retrieve_available_details_query_sql=mysqli_query($connection,$retrieve_available_details_query);
}

function getActiveProductsByCategory($category_id){

    global $connection;

    $retrieve_available_details_query=" SELECT * FROM products WHERE category_id='$category_id' AND availability='1' ";
    return   $retrieve_available_details_query_sql=mysqli_query($connection,$retrieve_available_details_query);

}

function redirect($url,$message){
    
    $_SESSION['message']=$message;
    header('Location:' .$url);
    exit();

}

?>
