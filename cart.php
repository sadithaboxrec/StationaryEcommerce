<?php 
include('functions/frontendfunctions.php');
include('includes/header.php');
?>
<h3 class="mb-3 mt-2 pb-1 pb-md-0 mb-md-5 text-center">Cart Items</h3>
        <div class="container my-5">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <tbody>
                                <?php  
                                    $cartitems = getCartItems();

                                    if(mysqli_num_rows($cartitems) > 0){
                                        foreach($cartitems as $item){
                                ?>
                                    <tr class="cart_data">
                                        
                                        <td>
                                            <img src="uploads/products/<?= $item['image'] ?>" alt="Product Image" class="rounded-circle" width="50" height="50">
                                        </td>

                                        <td><?= htmlspecialchars($item['name']); ?></td>

                                        <td><?= htmlspecialchars($item['selling_price']); ?></td>

                                        <td>
                                            <input type="hidden" class="product_id"  value="<?php echo $item['product_id']; ?>">
                                            <button class="btn btn-sm btn-outline-secondary decrease updateQty">-</button>
                                            <input type="number" class="qty-input" value="<?php echo $item['quantity']; ?>" min="1" max="10">
                                            <button class="btn btn-sm btn-outline-secondary increase updateQty">+</button>
                                        </td>


                                        <td>
                                            <button type="submit" name="deleteProductBtn" class="btn btn-sm btn-outline-danger">
                                                <i class="fa fa-trash"></i>
                                                Remove
                                            </button>
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



<?php include('includes/footer.php'); ?>
