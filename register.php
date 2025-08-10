<?php 
session_start();
include('includes/header.php'); ?>

<?php  
if(isset($_SESSION['message']))    { ?>

      <div class="mx-auto w-50">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hello?</strong> <?=$_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
       </div>
    <?php 
    unset($_SESSION['message'] );
}
?>

<div class="container mt-5 d-flex justify-content-center">

    <div class="row border rounded-5 p-3 bg-white shadow box-area">

        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #7cfc00;">
            <div class="featured-image mb-3">
                <img src="assets/images/register.jpeg" class="img-fluid" style="width: 250px;">
            </div>
            <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">
                Join StationaryMart
            </p>
            <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">
                Shop all the stationary under one roof</small>
        </div>


        <div class="col-md-6 right-box">
            <div class="row align-items-center">
                <div class="header-text mb-4">
                    <h2 class="text-center">Register</h2>
                </div>

                <form action="functions/authenticateregister.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Name" name="username">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email address" name="email">
                    </div>
                    <div class="input-group mb-3">
                        <input type="tel" class="form-control form-control-lg bg-light fs-6" placeholder="Telephone Number" name="phone">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" name="password">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Confirm Password" name="conPass">
                    </div>

                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-success w-100 fs-6" name="registerBtn">Sign Up</button>
                    </div>
                </form>

                <div class="row">
                    <small>Already have an account? <a href="login.php">Sign In</a></small>
                </div>
            </div>
        </div>

    </div>
</div>




<?php include('includes/footer.php'); ?>
