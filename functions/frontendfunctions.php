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

function getCartItems(){

    global $connection;

    $user_id = $_SESSION['authentication_user']['user_id'];
    $retrieve_cart_items_query = "
                                        SELECT 
                                            c.id AS cid, 
                                            c.product_id, 
                                            c.quantity, 
                                            p.id AS pid, 
                                            p.name, 
                                            p.image, 
                                            p.original_price, 
                                            p.selling_price 
                                        FROM carts c
                                        JOIN products p ON c.product_id = p.id
                                        WHERE c.user_id = '$user_id'
                                        ORDER BY c.id DESC"      ;

    return   $retrieve_cart_items_query_sql=mysqli_query($connection,$retrieve_cart_items_query);

}

function redirect($url,$message){
    
    $_SESSION['message']=$message;
    header('Location:' .$url);
    exit();

}

?>
