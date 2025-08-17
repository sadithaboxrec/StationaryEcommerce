<?php

session_start();
include('../config/DBConnection.php');
include('../functions/storefunctions.php');


if(isset($_POST['addProductBtn'])) {

    $category_id = mysqli_real_escape_string($connection, $_POST['category']);
    $proName = mysqli_real_escape_string($connection, $_POST['proName']);
    $shortDescription = mysqli_real_escape_string($connection, $_POST['shortDescription']);
    $proDescription = mysqli_real_escape_string($connection, $_POST['proDescription']);

    $original_price = mysqli_real_escape_string($connection, $_POST['original_price']);
    $selling_price = mysqli_real_escape_string($connection, $_POST['selling_price']);
    $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 0;

    $trending = isset($_POST['trending']) ? 1 : 0;
    $availability = isset($_POST['availability']) ? 1 : 0;

    $metaTitle = mysqli_real_escape_string($connection, $_POST['metaTitle']);
    $metaKeywords = mysqli_real_escape_string($connection, $_POST['metaKeywords']);
    $metaDesc = mysqli_real_escape_string($connection, $_POST['metaDesc']);

    
    $allowed_types = ['jpg', 'jpeg', 'png']; 
    $max_file_size = 2 * 1024 * 1024;


    $proImage=$_FILES['proImage']['name'];

    $tmp_name = $_FILES['proImage']['tmp_name'];
    $file_size = $_FILES['proImage']['size'];
    $image_ext = strtolower(pathinfo($proImage, PATHINFO_EXTENSION));

    $path="../uploads/products";
    // $image_ext = pathinfo($proImage, PATHINFO_EXTENSION);
    $filename=time().'.'.$image_ext;

    
    if (!in_array($file_ext, $allowed_types)) {
        redirect('addproduct.php', "Invalid file type. Only JPG, PNG allowed.");
    }

    if ($file_size > $max_file_size) {
        redirect('addproduct.php', "File too large. Maximum 2MB allowed.");
        exit();
    }



    $product_insert_query = "INSERT INTO products (category_id, name, short_description, description, original_price, 
                             selling_price,quantity,trending, availability, image, meta_title, meta_keywords, meta_description) VALUES 
                            ('$category_id', '$proName', '$shortDescription', '$proDescription', '$original_price', '$selling_price', '$quantity', '$trending', '$availability', '$filename', '$metaTitle', '$metaKeywords', '$metaDesc')";

    $product_insert_query_sql=mysqli_query($connection,$product_insert_query);      
    
    if($product_insert_query_sql) {

        move_uploaded_file($_FILES['proImage']['tmp_name'], $path.'/'.$filename);
        redirect('addproduct.php',"Product Added Successfully");
    } else {
            redirect('addproduct.php',"Something Went Wrong");
    }


}

?>