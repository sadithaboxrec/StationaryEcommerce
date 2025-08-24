<?php
include('includes/header.php');
?>
  <!--Sidebar-->

  <div class="admin-container">

<?php
include('includes/sidebar.php');
?>



    <div class="main">


<?php
include('includes/navbar.php');
?>


      
      <!-- Main Content -->
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">

                        <?php
                        if(isset($_GET['id']))
                            {
                                $id = $_GET['id'];
                                $product= getDetailsById("products",$id);

                                if(mysqli_num_rows($product) > 0){

                                    $data=mysqli_fetch_array($product);
                        ?>





                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Edit Product
                            <a href="products.php" class="btn btn-primary bg-danger float-end">Back </a>
                        </h3>

                        <form action="producthandle.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="product_id" value="<?= $data['id']; ?>">

                        <div class="row">
                            <div class="col-12 mb-4">
                                <select class="form-select" id="category" name="category">
                                    <option selected>Select Category</option>
                                    <?php 
                                     $categories=getAllDetails('categories');

                                     if(mysqli_num_rows($categories) > 0){

                                     foreach($categories as $item){
                                    ?>
                                    <option value="<?= $item['id']; ?>" <?= $data['category_id'] == $item['id'] ? 'selected' : '' ?>><?= $item['name']; ?></option>

                                    <?php
                                     }
                                    }
                                    else{
                                        echo"No Category Available";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-md-6 mb-4">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" class="form-control form-control-lg" id="productname" name="proName" value="<?= $data['name']; ?>">
                                <label class="form-label" for="productname" >Product Name</label>
                            </div>
                            </div>

                            <div class="col-md-6 mb-4">

                            <div data-mdb-input-init class="form-outline datepicker w-100">
                                <input type="file" class="form-control form-control-lg" id="proImage" name="proImage"/>
                                <input type="hidden" name="old_image" value="<?= $data['image']; ?>">
                                <label for="proImage" class="form-label" >Current Image</label>
                                <img src="../uploads/products/<?=$data['image'] ?>" height="50px" width="50px">
                            </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-12">
                            <div data-mdb-input-init class="form-outline">
                                <textarea type="text" id="shortDescription" class="form-control form-control-lg" name="shortDescription">
                                    <?= $data['short_description']; ?>
                                </textarea>
                                <label class="form-label" for="shortDescription" > Topic Description</label>
                            </div>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                            <div data-mdb-input-init class="form-outline">
                                <textarea type="text" id="proDescription" class="form-control form-control-lg" name="proDescription">
                                    <?= $data['description']; ?>
                                </textarea>
                                <label class="form-label" for="proDescription" >Product Description</label>
                            </div>

                            </div>
                        </div>


                        <div class="row">

                            <div class="col-md-6 mb-4">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" class="form-control form-control-lg" id="original_price" name="original_price" value="<?= $data['original_price']; ?>">
                                <label class="form-label" for="original_price" >Original Price</label>
                            </div>
                            </div>

                            <div class="col-md-6 mb-4">

                            <div data-mdb-input-init class="form-outline datepicker w-100">
                                <input type="text" class="form-control form-control-lg" id="selling_price" name="selling_price" value="<?= $data['selling_price']; ?>"/>
                                <label for="selling_price" class="form-label" >Selling Price</label>
                            </div>
                            </div>

                        </div>


                        <div class="row">
                            
                            <div class="col-md-4 mb-4">
                                <div class="form-check">
                                    <input type="checkbox" name="trending" value="1" <?= $data['trending'] ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="trendingInput">Trending</label>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="form-check">
                                    <input type="checkbox" name="availability" value="1" <?= $data['availability'] ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="availabilityCheckbox">Available</label>
                                </div>
                            </div>

                            
                            <div class="col-md-4 mb-4">
                                <label for="quantityInput" class="form-label">Quantity</label>
                                <input type="number" class="form-control" id="quantityInput" name="quantity" value="<?= $data['quantity']; ?>">
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">

                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="metaTitle" class="form-control form-control-lg"  name="metaTitle" value="<?= $data['meta_title']; ?>"/>
                                <label class="form-label" for="metaTitle">Meta Title</label>
                            </div>

                            </div>
                            <div class="col-md-6 mb-4 pb-2">


                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="metaTitle" class="form-control form-control-lg"  name="metaKeywords" value="<?= $data['meta_keywords']; ?>">
                                <label class="form-label" for="metaKeywords">Meta Keywords</label>
                            </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">

                             <div data-mdb-input-init class="form-outline">
                                <textarea type="text" id="metaDesc" class="form-control form-control-lg" name="metaDesc" >
                                    <?= $data['meta_description']; ?>
                                </textarea>
                                <label class="form-label" for="metaDesc">Meta Description</label>
                            </div>

                            </div>
                        </div>

                        <div class="mt-4 pt-2">
                            <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Update" name="updateProductBtn" />
                        </div>

                        </form>

                    </div>
                    </div>


                    <?php
                                }
                                else{
                                    echo"Product Not Found";
                                }
                         }
                         else{
                            echo"Try Again,ID not working";
                         }
                    ?>

                </div>
                </div>
            </div>
        </section>
      
      <!--main content div end-->


      
      
 
    </div> <!--Main end-->



  </div>   <!--admin-container-div end-->
  

<?php
include('includes/footer.php');
?>