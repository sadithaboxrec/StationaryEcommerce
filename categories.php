<?php 

include('functions/frontendfunctions.php');
include('includes/header.php');

?>

<div class="py-5">
    <div class="container">

        <h2 class="text-center mb-5">Categories</h2>

        <div class="row">
            <?php 
            $categories = getAllRecords('categories');

            if(mysqli_num_rows($categories) > 0){
                foreach($categories as $item){
                    ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="uploads/<?= $item['image']; ?>" alt="Category Image" class="card-img-top" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item['name']; ?></h5>
                                <p class="card-text"><?= $item['description']; ?></p>
                                <button type="button" class="btn btn-primary">VIEW MORE</button>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p>No Category Records found</p>";
            }
            ?>
        </div>

    </div>
</div>

<?php include('includes/footer.php'); ?>