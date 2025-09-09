<?php

session_start();
file_put_contents("session_debug_cart.txt", print_r($_SESSION, true));

include('../config/DBConnection.php');

if(isset($_SESSION['authentication'])){

    if(isset($_POST['scope'])){

            $scope= $_POST['scope'];
            switch($scope){

                case "addtoCart":
                    $pro_id= $_POST['product_id'];
                    $pro_qty= $_POST['product_qty'];

                    $user_id= $_SESSION['authentication_user']['user_id'];

                    $cart_existing_products="SELECT * FROM carts WHERE user_id='$user_id' AND product_id='$pro_id' ";
                    $cart_existing_products_sql= mysqli_query($connection,$cart_existing_products);

                    if(mysqli_num_rows($cart_existing_products_sql) > 0){
                       echo "ProductExists";
                    }else{
                        
                            $cart_insert_query= "INSERT INTO carts (user_id,product_id,quantity) VALUES ('$user_id','$pro_id','$pro_qty') ";
                            $cart_insert_query_sql= mysqli_query($connection,$cart_insert_query);

                            if($cart_insert_query_sql){
                                echo 201;
                            }else{
                                echo 500;
                            }

                }
                    break;
                default:
                    echo 500;

            }
         }
    }else{
        echo 401;
    }

?>