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
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Add Product</h3>

                        <form action="producthandle.php" method="POST" enctype="multipart/form-data">


                        <div class="row">
                            <div class="col-12 mb-4">
                                <select class="form-select" id="category" name="category">
                                    <option selected>Select Category</option>
                                    <?php 
                                     $categories=getAllDetails('categories');

                                     if(mysqli_num_rows($categories) > 0){

                                     foreach($categories as $item){
                                    ?>
                                    <option value="<?= $item['id']; ?>"> <?=$item['name']; ?> </option>
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
                                <input type="text" class="form-control form-control-lg" id="productname" name="proName">
                                <label class="form-label" for="productname" >Product Name</label>
                            </div>
                            </div>

                            <div class="col-md-6 mb-4">

                            <div data-mdb-input-init class="form-outline datepicker w-100">
                                <input type="file" class="form-control form-control-lg" id="catImage" name="proImage"/>
                                <label for="proImage" class="form-label" >Image</label>
                            </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-12">
                            <div data-mdb-input-init class="form-outline">
                                <textarea type="text" id="shortDescription" class="form-control form-control-lg" name="shortDescription">
                                </textarea>
                                <label class="form-label" for="shortDescription" > Topic Description</label>
                            </div>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                            <div data-mdb-input-init class="form-outline">
                                <textarea type="text" id="proDescription" class="form-control form-control-lg" name="proDescription">
                                </textarea>
                                <label class="form-label" for="proDescription" >Product Description</label>
                            </div>

                            </div>
                        </div>


                        <div class="row">

                            <div class="col-md-6 mb-4">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" class="form-control form-control-lg" id="original_price" name="original_price">
                                <label class="form-label" for="original_price" >Original Price</label>
                            </div>
                            </div>

                            <div class="col-md-6 mb-4">

                            <div data-mdb-input-init class="form-outline datepicker w-100">
                                <input type="text" class="form-control form-control-lg" id="selling_price" name="selling_price"/>
                                <label for="selling_price" class="form-label" >Selling Price</label>
                            </div>
                            </div>

                        </div>


                        <div class="row">
                            
                            <div class="col-md-4 mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="trendingInput" name="trending">
                                    <label class="form-check-label" for="trendingInput">Trending</label>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="availabilityCheckbox" name="availability" value="1">
                                    <label class="form-check-label" for="availabilityCheckbox">Available</label>
                                </div>
                            </div>

                            
                            <div class="col-md-4 mb-4">
                                <label for="quantityInput" class="form-label">Quantity</label>
                                <input type="number" class="form-control" id="quantityInput" name="quantity">
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">

                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="metaTitle" class="form-control form-control-lg"  name="metaTitle"/>
                                <label class="form-label" for="metaTitle">Meta Title</label>
                            </div>

                            </div>
                            <div class="col-md-6 mb-4 pb-2">


                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="metaTitle" class="form-control form-control-lg"  name="metaKeywords"/>
                                <label class="form-label" for="metaKeywords">Meta Keywords</label>
                            </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">

                             <div data-mdb-input-init class="form-outline">
                                <textarea type="text" id="metaDesc" class="form-control form-control-lg" name="metaDesc">
                                </textarea>
                                <label class="form-label" for="metaDesc">Meta Description</label>
                            </div>

                            </div>
                        </div>

                        <div class="mt-4 pt-2">
                            <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Submit" name="addProductBtn" />
                        </div>

                        </form>

                    </div>
                    </div>
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