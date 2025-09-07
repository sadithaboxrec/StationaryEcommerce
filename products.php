<?php 

include('functions/frontendfunctions.php');
include('includes/header.php');

if(isset($_GET['category'])){

    $category_name= $_GET['category'];
    $category_details= getAvailableDetailsById('categories',$category_name);
    $categories=mysqli_fetch_array($category_details);

    if($categories){

    $cat_id=$categories['id'];
?>

<div class="py-5">
    <div class="container">

        <h2 class="text-center mb-5"> <?=$categories['name']; ?> </h2>

        <div class="row">
            <?php 
            $products = getActiveProductsByCategory($cat_id);

            if(mysqli_num_rows($products) > 0){
                foreach($products as $item){
                    ?>
                    <div class="col-md-4 mb-4">
                        <a href="#">
                            <div class="card h-100">
                                <img src="uploads/products/<?=$item['image']; ?>" alt="Product Image" class="card-img-top" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$item['name']; ?></h5>
                                    <p class="card-text"><?=$item['description']; ?></p>
                                    <button type="button" class="btn btn-primary">VIEW MORE</button>
                                </div>
                            </div>
                         </a>
                    </div>
                    <?php
                }
            } else {
                echo "<p>No Products Records found</p>";
            }
            ?>
        </div>

    </div>
</div>


<?php
    } else{
        echo "<h4 class='text-center'>Something went wrong</h4>";
    }
}
else{
    echo "<h4 class='text-center'>Something went wrong</h4>";
}
include('includes/footer.php'); 

?>