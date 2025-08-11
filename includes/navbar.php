<nav class="navbar">
    <div class="navbar-container">
        <a href="#" class="navbar-logo">Stationary Web</a>
        <button class="navbar-toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
        <ul class="navbar-menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Page1</a></li>
            <li><a href="#">Page2</a></li>
            <li><a href="#">Page3</a></li>

            <?php
                      if(isset($_SESSION['authentication'])){
            ?>
                    <li><?= $_SESSION['authentication_user']['name']; ?></li>
                    <li><a href="logout.php">Log Out</a></li>

            <?php
            }else{
            ?>
                        <li><a href="login.php">Login</a></li>
            <?php
            }
            ?>

        </ul>
    </div>
</nav>