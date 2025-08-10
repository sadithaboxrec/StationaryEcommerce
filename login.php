<?php 
session_start();

if(isset($_SESSION['authentication'])){
    header('Location:index.php');
    exit();
}

include('includes/header.php');

?>

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

        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #7fff00;">
            <div class="featured-image mb-3">
                <img src="assets/images/register.jpeg" class="img-fluid" style="width: 250px;">
            </div>
            <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Welcome Back</p>
            <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">
                Find all you need here.</small>
        </div>


        <div class="col-md-6 right-box">
            <div class="row align-items-center">
                <div class="header-text mb-4">
                    <h2>Sign In</h2>
                    <p>We are happy to have you back.</p>
                </div>
                
                <form action="functions/authenticatelogin.php" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email address" name="email">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" name="password">
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="forgot">
                            <small><a href="#">Forgot Password?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-success w-100 fs-6" name="loginBtn">Login</button>
                    </div>
                </form>

                <div class="row">
                    <small>Don't have account? <a href="#">Sign Up</a></small>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include('includes/footer.php'); ?>
