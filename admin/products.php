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
        <div class="container my-5">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0 text-center">Product List</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Availability</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  
                                    $products = getAllDetails('products');

                                    if(mysqli_num_rows($products) > 0){
                                        foreach($products as $item){
                                ?>
                                    <tr>
                                        <td><?= $item['id']; ?></td>

                                        <td>
                                            <img src="../uploads/products/<?= $item['image'] ?>" alt="Product Image" class="rounded-circle" width="50" height="50">
                                        </td>

                                        <td><?= htmlspecialchars($item['name']); ?></td>

                                        <td>
                                            <?php if ($item['availability'] == '1'): ?>
                                                <span class="badge bg-success">Available</span>
                                            <?php else: ?>
                                                <span class="badge bg-danger">Unavailable</span>
                                            <?php endif; ?>
                                        </td>


                                        <td>
                                            <a href="edit_product.php?id=<?= $item['id']; ?>" class="btn btn-sm btn-outline-primary">
                                                Edit
                                            </a>

                                            <form action="producthandle.php" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                                <input type="hidden" name="Product_id" value="<?= $item['id']; ?>">
                                                <button type="submit" name="deleteProductBtn" class="btn btn-sm btn-outline-danger">
                                                    Delete
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                <?php
                                        }
                                    } else {
                                ?>
                                    <tr>
                                        <td colspan="5" class="text-center text-muted py-4">No data found</td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


 
    </div> <!--Main end-->



  </div>   <!--admin-container-div end-->
  

<?php
include('includes/footer.php');
?>      