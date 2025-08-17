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
                                $category= getDetailsById("categories",$id);

                                if(mysqli_num_rows($category) >0){

                                    $data=mysqli_fetch_array($category);

                                
                         ?>

                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Edit Category</h3>

                        <form action="categoryhandle.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="category_id" value=" <?= $data['id'] ?> ">

                            <div class="row">

                                <div class="col-md-6 mb-4">
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="categoryname" value="<?= $data['name']; ?>" class="form-control form-control-lg" name="catName"/>
                                    <label class="form-label" for="categoryname" >Category Name</label>
                                </div>
                                </div>

                                <div class="col-md-6 mb-4">

                                <div data-mdb-input-init class="form-outline datepicker w-100">
                                    <input type="file" class="form-control form-control-lg" id="catImage" name="catImage"/>
                                    
                                    <img src="../uploads/<?= $data['image'] ?>" height="50px" width="50px"> 
                                    <label for="catImage" class="form-label" >Current Image</label>
                                    <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                                </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-12">
                                <div data-mdb-input-init class="form-outline">
                                    <textarea type="text" id="categoryDescription" class="form-control form-control-lg" name="catDescription"> 
                                        <?= $data['description']; ?>
                                    </textarea>
                                    <label class="form-label" for="categoryDescription" >Category Description</label>
                                </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 ">
                                    <h6 class="mb-2 pb-1">Popularity: </h6>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="popularity" id="popular" value="1"
                                            <?= isset($data['popularity']) && $data['popularity'] == 1 ? 'checked' : '' ?> />
                                        <label class="form-check-label" for="popular">Popular</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="popularity" id="nonpopular" value="0"
                                            <?= isset($data['popularity']) && $data['popularity'] == 0 ? 'checked' : '' ?> />
                                        <label class="form-check-label" for="nonpopular">Not Popular</label>
                                    </div>

                                </div>

                                <div class="col-md-6 mb-4">

                                    <h6 class="mb-2 pb-1">Availability: </h6>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="availability" id="active" value="1"
                                            <?= isset($data['availability']) && $data['availability'] ? 'checked' : '' ?> />
                                        <label class="form-check-label" for="active">Active</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="availability" id="inactive" value="0"
                                            <?= isset($data['availability']) && !$data['availability'] ? 'checked' : '' ?> />
                                        <label class="form-check-label" for="inactive">Inactive</label>
                                    </div>

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
                                    <input type="text" id="metakeywords" class="form-control form-control-lg"  name="metaKeywords"
                                        value="<?= $data['meta_keywords']; ?>"/>
                                    <label class="form-label" for="metaKeywords">Meta Keywords</label>
                                </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">

                                <div data-mdb-input-init class="form-outline">
                                    <textarea type="text" id="metaDesc" class="form-control form-control-lg" name="metaDesc">
                                        <?= $data['meta_description']; ?>
                                    </textarea>
                                    <label class="form-label" for="metaDesc">Meta Description</label>
                                </div>

                                </div>
                            </div>

                            <div class="mt-4 pt-2">
                                <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Update" name="updateCategoryBtn" />
                            </div>

                        </form>


                    </div>
                    </div>

                    <?php
                                }
                                else{
                                    echo"Category Not Found";
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