<?php

session_start();
include('../config/DBConnection.php');
include('../functions/storefunctions.php');

if(isset($_POST['addCategoryBtn'])){

    $catName = mysqli_real_escape_string($connection, $_POST['catName']);
    $categoryDescription = mysqli_real_escape_string($connection, $_POST['categoryDescription']);

    $popularity = isset($_POST['popularity']) ? (int)$_POST['popularity'] : 0;
    $availability = isset($_POST['availability']) ? (int)$_POST['availability'] : 1;

    $metaTitle = mysqli_real_escape_string($connection, $_POST['metaTitle']);
    $metaKeywords = mysqli_real_escape_string($connection, $_POST['metaKeywords']);
    $metaDesc = mysqli_real_escape_string($connection, $_POST['metaDesc']);


    $catImage=$_FILES['catImage']['name'];

    $path="../uploads";
    $image_ext = pathinfo($catImage, PATHINFO_EXTENSION);
    $filename=time().'.'.$image_ext;

    $category_insert_query="INSERT INTO categories 
                (name, description, image, popularity, availability, meta_title, meta_keywords, meta_description) 
                VALUES ('$catName', '$categoryDescription', '$filename', '$popularity', '$availability', '$metaTitle', '$metaKeywords', '$metaDesc')";

    $category_insert_query_sql=mysqli_query($connection,$category_insert_query);
    
    if($category_insert_query_sql){

        move_uploaded_file($_FILES['catImage']['tmp_name'], $path . '/' . $filename);

        redirect('addcategory.php',"Category Added Successfully");

    }else{

        redirect('addcategory.php',"Something Went rong");
    }


}

?>