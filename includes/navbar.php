<header>
  
  <div class="p-3 text-center bg-white border-bottom">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-4 text-center text-md-left mb-3 mb-md-0">
          <a href="#!">
            <img src="https://via.placeholder.com/150x35?text=StationaryMart" height="35" alt="stationaryMart"/>
          </a>
        </div>

        <div class="col-md-4">
          <form class="d-flex">
            <input type="search" class="form-control" placeholder="Search" />
            <button class="btn btn-outline-secondary ml-2" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </form>
        </div>

        <div class="col-md-4 text-center text-md-right">
          <a href="#" class="text-dark mr-3">
            <i class="fa fa-shopping-cart"></i>
            <span class="badge badge-danger">1</span>
          </a>

          
                <?php if (isset($_SESSION['authentication'])): ?>
                <!-- Logged-in: Show avatar and dropdown -->
                <div class="btn-group">
                    <button type="button" class="btn btn-link dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: none;">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"
                        class="rounded-circle"
                        height="35"
                        alt="User Avatar"
                        style="cursor: pointer; border: 2px solid #28a745; padding: 2px;"
                    />
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                    <span class="dropdown-item-text font-weight-bold text-success">
                        <?= htmlspecialchars($_SESSION['authentication_user']['name']); ?>
                    </span>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">My Profile</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </div>
                <?php else: ?>
                <!-- Not logged-in: Show 'Login' styled -->
                <a href="login.php" class="btn btn-success btn-sm ml-2 font-weight-bold">
                    <i class="fa fa-sign-in mr-1"></i> Login
                </a>
                <?php endif; ?>



        </div>
      </div>
    </div>
  </div>


  <nav class="navbar navbar-expand-lg navbar-light border-bottom">
    <div class="container-fluid">
      <a class="nav-link" href="#">Home</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav mr-auto">
          
          <li class="nav-item dropdown position-static">
            <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu w-100 mt-0 border-0" aria-labelledby="categoriesDropdown">
              <div class="container py-4">
                <div class="row">
                 
                  <div class="col-md-4">
                    <h6 class="text-uppercase">Explicabo Voluptas</h6>
                    <a href="#" class="text-dark">
                      <div class="media mb-3">
                        <img src="https://mdbootstrap.com/img/new/standard/city/041.jpg" class="mr-3 img-fluid rounded" style="width: 60px;" alt="">
                        <div class="media-body">
                          <p class="mb-1"><strong>Lorem ipsum</strong></p>
                          <small class="text-muted">15.07.2020</small>
                        </div>
                      </div>
                    </a>
                  </div>
                  
                  <div class="col-md-4">
                    <h6 class="text-uppercase">Iste Quaerato</h6>
                    <a href="#" class="text-dark">
                      <div class="media mb-3">
                        <img src="https://mdbootstrap.com/img/new/standard/city/043.jpg" class="mr-3 img-fluid rounded" style="width: 60px;" alt="">
                        <div class="media-body">
                          <p class="mb-1"><strong>Lorem ipsum</strong></p>
                          <small class="text-muted">15.07.2020</small>
                        </div>
                      </div>
                    </a>
                  </div>
                
                  <div class="col-md-4">
                    <h6 class="text-uppercase">Cras Justo Odio</h6>
                    <a href="#" class="text-dark">
                      <div class="media mb-3">
                        <img src="https://mdbootstrap.com/img/new/standard/city/045.jpg" class="mr-3 img-fluid rounded" style="width: 60px;" alt="">
                        <div class="media-body">
                          <p class="mb-1"><strong>Lorem ipsum</strong></p>
                          <small class="text-muted">15.07.2020</small>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>

         
          <li class="nav-item">
            <a class="nav-link" href="#">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">FAQ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>