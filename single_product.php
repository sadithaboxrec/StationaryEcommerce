<?php 

include('functions/frontendfunctions.php');
include('includes/header.php');

if(isset($_GET['product'])){

    $product_name= $_GET['product'];
    $product_details= getAvailableDetailsById('products',$product_name);
    $products=mysqli_fetch_array($product_details);

    if($products){

        ?>

          <section class="container single-product my-5 pt-5">

                <div class="row mt-5">

                    <div class="col-lg-5 col-md-6 col-sm-12">

                        <img src="uploads/products/<?=$products['image']; ?>"  class="img-fluid w-100 pb-1" id="mainimg">
                        
                        <div class="small-img-group">

                        <div class="small-img-col">
                            <img src="uploads/products/<?=$products['image']; ?>" width="100%" class="small-img">
                        </div>

                        <div class="small-img-col">
                            <img src="uploads/products/<?=$products['image']; ?>" width="100%" class="small-img">
                        </div>

                        <div class="small-img-col">
                            <img src="uploads/products/<?=$products['image']; ?>" width="100%" class="small-img">
                        </div>

                        <div class="small-img-col">
                         
                        </div>

                        </div>

                    </div>


                    <div class="col-lg-6 col-md-12 col-12">

                        <h2> <?=$products['name']; ?> 
                                <span class="float-end text-danger"> <small> <?php if($products['trending']){echo "Trending!";} ?> </small></span> 
                        </h2>

                        <h3 class="py-4"><?=$products['short_description']; ?></h3>

                        <div class="row">
                            <div class="col-6">
                                <h5>Original Price</h5>
                                <p> RS. <s><?=$products['original_price']; ?></s></p>
                            </div>
                            <div class="col-6">
                                <h5>Selling Price</h5>
                                <p>RS. <?=$products['selling_price']; ?></p>
                            </div>
                        </div>

                        <input type="number" value="1" min="1" max="10">

                        <button class="buy-btn">Add to Cart</button>
                        <h4 class="mt-5 mb-5">Product Details</h4>
                        <span>
                            <?=$products['description']; ?>
                        </span>
                    </div>


                </div>

           </section>


        <?php 
    }else{
        echo "<h4 class='text-center'>Product Not Found</h4>";
    }
}
?>



<?php

include('includes/footer.php'); 

?>