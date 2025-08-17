<?php

session_start();
include('../config/DBConnection.php');
include('../functions/storefunctions.php');

    if(isset($_POST['addCategoryBtn'])){

        $catName = mysqli_real_escape_string($connection, $_POST['catName']);
        $catDescription = mysqli_real_escape_string($connection, $_POST['catDescription']);

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
                    VALUES ('$catName', '$catDescription', '$filename', '$popularity', '$availability', '$metaTitle', '$metaKeywords', '$metaDesc')";

        $category_insert_query_sql=mysqli_query($connection,$category_insert_query);
        
        if($category_insert_query_sql){

            move_uploaded_file($_FILES['catImage']['tmp_name'], $path . '/' . $filename);

            redirect('addcategory.php',"Category Added Successfully");

        }else{

            redirect('addcategory.php',"Something Went rong");
        }


    }    
    else if(isset($_POST['updateCategoryBtn'])){

        $category_id=$_POST['category_id'];

        $catName = mysqli_real_escape_string($connection, $_POST['catName']);
        $catDescription = mysqli_real_escape_string($connection, $_POST['catDescription']);

        $popularity = isset($_POST['popularity']) ? (int)$_POST['popularity'] : 0;
        $availability = isset($_POST['availability']) ? (int)$_POST['availability'] : 1;

        $metaTitle = mysqli_real_escape_string($connection, $_POST['metaTitle']);
        $metaKeywords = mysqli_real_escape_string($connection, $_POST['metaKeywords']);
        $metaDesc = mysqli_real_escape_string($connection, $_POST['metaDesc']);


        $new_Image=$_FILES['catImage']['name'];
        $old_Image = $_POST['old_image'];

        if($new_Image!=""){

           $image_ext = pathinfo($new_Image, PATHINFO_EXTENSION);
           $update_filename=time().'.'.$image_ext;

        }else{
            $update_filename=$old_Image;
        }

        $path="../uploads";

        $update_query_category=" UPDATE categories SET
                    name='$catName', description='$catDescription',popularity='$popularity', availability='$availability', meta_title='$metaTitle', meta_keywords='$metaKeywords', meta_description='$metaDesc',image='$update_filename' WHERE id='$category_id'  ";
                  
        $update_query_category_sql=mysqli_query($connection,$update_query_category);          

        if($update_query_category_sql){

            if ($new_Image != "") {
                move_uploaded_file($_FILES['catImage']['tmp_name'], $path . '/' . $update_filename);

                if (file_exists("../uploads/" . $old_Image)) {
                    unlink("../uploads/" . $old_Image);
                }
            }

            redirect("category.php", "Category Updated Successfully");

        } else {
            redirect("edit_category.php?id=$category_id", "Something Went Wrong");
        }


    } 
    else if (isset($_POST['deleteCategoryBtn'])){

        $category_id=mysqli_real_escape_string($connection,$_POST['category_id']);

        $category_query=" SELECT * FROM CATEGORIES where ID='$category_id' ";
        $category_query_run=mysqli_query($connection,$category_query);
        $category_data=mysqli_fetch_array($category_query_run);
        $image=$category_data['image'];

        $delete_category_query=" DELETE FROM categories WHERE id='$category_id' ";
        $delete_category_query_sql=mysqli_query($connection,$delete_category_query);

        if($delete_category_query_sql){

            if (file_exists("../uploads/" . $image)) {
                unlink("../uploads/" . $image);
            }
            redirect("category.php","Category Deleted Successfully");

        }else{
             redirect("category.php","Something Went Wrong");
        }
    }   


?>