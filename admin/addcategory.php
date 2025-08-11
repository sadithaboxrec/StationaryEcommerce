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
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Add Category</h3>

                        <form action="categoryhandle.php" method="POST" enctype="multipart/form-data">

                        <div class="row">

                            <div class="col-md-6 mb-4">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="categoryname" class="form-control form-control-lg" name="catName"/>
                                <label class="form-label" for="categoryname" >Category Name</label>
                            </div>
                            </div>

                            <div class="col-md-6 mb-4">

                            <div data-mdb-input-init class="form-outline datepicker w-100">
                                <input type="file" class="form-control form-control-lg" id="catImage" name="catImage"/>
                                <label for="catImage" class="form-label" >Image</label>
                            </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-12">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="categoryDescription" class="form-control form-control-lg" name="catDescription"/>
                                <label class="form-label" for="categoryDescription" >Category Description</label>
                            </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4 ">
                                <h6 class="mb-2 pb-1">Popularity: </h6>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="popularity" id="popular" value="1" checked />
                                    <label class="form-check-label" for="popular">Popular</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="popularity" id="nonpopular" value="0" />
                                    <label class="form-check-label" for="nonpopular">Not Popular</label>
                                </div>

                            </div>

                            <div class="col-md-6 mb-4">

                                <h6 class="mb-2 pb-1">Availability: </h6>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="availability" id="active" value="1" checked />
                                    <label class="form-check-label" for="active">Active</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="availability" id="inactive" value="0" />
                                    <label class="form-check-label" for="inactive">Inactive</label>
                                </div>

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
                                <input type="text" id="metaDesc" class="form-control form-control-lg" name="metaDesc"/>
                                <label class="form-label" for="metaDesc">Meta Description</label>
                            </div>

                            </div>
                        </div>

                        <div class="mt-4 pt-2">
                            <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Submit" name="addCategoryBtn" />
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