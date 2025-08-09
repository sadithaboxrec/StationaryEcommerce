<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin-Dashboard</title>

  <!-- styles -->
  <link rel="stylesheet" href="assest/css/dashboardstyle.css">
  <!-- fontawesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" >
</head>
<body>

  <!--Sidebar-->

  <div class="admin-container">


    <div class="sidebar">

      
      <div class="sidebar-brand">
        <h1> <span>Saditha</span>  </h1>
      </div>

      <div class="sidebar-menu">

        <ul>

          <li>
            <a href="">
              <span class="icon">
                <i class="fa-solid fa-house-user"></i>
              </span>
              <span class="title">Dashboard</span>
            </a>
          </li>
  
          <li>
            <a href="#">
              <span class="icon">
                <i class="fa-solid fa-user-tie"></i>
              </span>
              <span class="title">Admins</span>
            </a>
          </li>
  

          <li class="has-submenu">
            <a href="#">
              <span class="icon">
                <i class="fa-solid fa-money-check-dollar"></i>
              </span>
              <span class="title">Orders 
                <span class="fa-solid fa-caret-down"></span>
              </span>
            </a>
            <ul class="submenu">
              <li><a href="https://www.google.com">Add Orders</a></li>
              <li><a href="https://fast.com/">Check Orders</a></li>
            </ul>
          </li>
          
          <li class="has-submenu">
            <a href="javascript:void(0);">
              <span class="icon"><i class="fa-solid fa-cart-shopping"></i></span>
              <span class="title">Products <span class="fa-solid fa-caret-down"></span></span>
            </a>
            <ul class="submenu">
              <li><a href="#">Add Orders</a></li>
              <li><a href="#">Check Orders</a></li>
            </ul>
          </li>
          
          
          <li class="has-submenu">
            <a href="javascript:void(0);">
              <span class="icon">
                <i class="fa-solid fa-tag"></i>
              </span>
              <span class="title">Categories
                <span class="fa-solid fa-caret-down"></span>
              </span>
            </a>
            <ul class="submenu">
              <li><a href="#">Add Orders</a></li>
              <li><a href="#">Check Orders</a></li>
            </ul>
          </li>
          
          
  
          <li>
            <a href="">
              <span class="icon">
                <i class="fa-solid fa-message"></i>
              </span>
              <span class="title">Messages</span>
            </a>
          </li>
  
          <li>
            <a href="">
              <span class="icon">
                <i class="fa-solid fa-right-from-bracket"></i>
              </span>
              <span class="title">Sign-out</span>
            </a>
          </li>
  
  
        </ul>
      </div>



    </div>   <!--Sidebar end-->


    <div class="main">

      <div class="header">

        <div class="toggle">
          <i class="fa-solid fa-bars"></i>
        </div>

      
        <div class="search">
          <label for="">
            <input type="search" placeholder="Search here">
            <i class="fa-solid fa-magnifying-glass"></i>
          </label>
        </div> 
      
        <div class="current-user">
          <img src="assest/images/saditha.jpg" alt="" width="60px" height="60px">
          <div>
            <h4>Saditha</h4>
            <small>Super Admin</small>
          </div>
        </div>
      
      </div>  <!--header end-->


      
            <!-- Main Content -->
 
      <div class="main-content">

        <div class="cards">
      
      
                <div class="card-single">
        
                  <div>
                    <h1 class="numbers">14</h1>
                    <span class="card-name">Website Visits</span>
                  </div>
        
                  <div>
                    <span class="icon">
                      <i class="fa-solid fa-users"></i>
                    </span>
                  </div>
        
                </div>  <!--Card Single end-->
        
                <div class="card-single">
        
                  <div>
                    <h1 class="numbers">35</h1>
                    <span class="card-name">Messages</span>
                  </div>
        
                  <div>
                    <span class="icon">
                      <i class="fa-solid fa-comment-dots"></i>
                    </span>
                  </div>
        
                </div>  <!--Card Single end-->
        
                <div class="card-single">
        
                  <div>
                    <h1 class="numbers">12</h1>
                    <span class="card-name">Orders Pending</span>
                  </div>
        
                  <div>
                    <span class="icon">
                      <i class="fa-solid fa-arrow-down-wide-short"></i>
                    </span>
                  </div>
        
                </div>  <!--Card Single end-->
        
                <div class="card-single">
        
                  <div>
                    <h1 class="numbers">$6k</h1>
                    <span class="card-name">Income for the day</span>
                  </div>
        
                  <div>
                    <span class="icon">
                      <i class="fa-solid fa-money-bill"></i>
                    </span>
                  </div>
        
                </div>  <!--Card Single end-->
                
        
        </div>   <!--cards end -->
      
      
                    <!-- order table -->
        <div class="dashboard-details">
      
          <div class="recentOrders-table">
      
            <div class="section-header">
              <h2>Recent Orders</h2>
              <button>See All 
                <i class="fa-solid fa-arrow-right"></i>
              </button>            
            </div>
      
            <div class="table-div">
              <div class="table-responsive">
      
                      <table width="100%">
      
                        <thead>
                          <tr>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Payement</td>
                          </tr>
                        </thead>
      
                        <tbody>
                          <tr>
                            <td>MSI Laptop</td>
                            <td>250000/-</td>
                            <td><span class="status delivered">Delivered</span></td>
                            </tr>
                          <tr>
                            <td>IPhone 15+</td>
                            <td>200000/-</td>
                            <td><span class="status pending">Pending</span></td>
                            </tr>
                          <tr>
                            <td>PowerBank</td>
                            <td>12000/-</td>
                            <td><span class="status return">Return</span></td>
                          </tr>
                          <tr>
                            <td>Headphones</td>
                            <td>2400/-</td>
                            <td><span class="status inProgress">In Progress</span><td>
                          </tr>
                        </tbody>
      
                      </table>
      
              </div> <!--table responsive end-->
            </div> <!--table-div end-->
      
      
          </div> <!--recentorders-table end-->   
              
      
      
          <div class="admins-details">
      
           <div class="section-header">
                    <h3>Admins</h3>
            </div>
              
      
            <div class="admin">

              <div class="info">
                <img src="assest/images/saditha.jpg" alt="" width="40px" height="40px">
                <div>
                  <h4>Saditha Fernando</h4>
                  <small>Super Admin</small>
                </div>                
              </div>
              <div class="contact">
                <i class="fa-solid fa-circle-user"></i>
                <i class="fa-solid fa-mobile-button"></i>
                <i class="fa-solid fa-info"></i>
              </div>

            </div> <!--admin end-->
      
            <div class="admin">

              <div class="info">
                <img src="assest/images/saditha.jpg" alt="" width="40px" height="40px">
                <div>
                  <h4>Saditha Fernando</h4>
                  <small>Super Admin</small>
                </div>                
              </div>
              <div class="contact">
                <i class="fa-solid fa-circle-user"></i>
                <i class="fa-solid fa-mobile-button"></i>
                <i class="fa-solid fa-info"></i>
              </div>
              
            </div> <!--admin end-->
      
            <div class="admin">

              <div class="info">
                <img src="assest/images/saditha.jpg" alt="" width="40px" height="40px">
                <div>
                  <h4>Saditha Fernando</h4>
                  <small>Super Admin</small>
                </div>                
              </div>
              <div class="contact">
                <i class="fa-solid fa-circle-user"></i>
                <i class="fa-solid fa-mobile-button"></i>
                <i class="fa-solid fa-info"></i>
              </div>
              
            </div> <!--admin end-->
      
            <div class="admin">

              <div class="info">
                <img src="assest/images/saditha.jpg" alt="" width="40px" height="40px">
                <div>
                  <h4>Saditha Fernando</h4>
                  <small>Super Admin</small>
                </div>                
              </div>
              <div class="contact">
                <i class="fa-solid fa-circle-user"></i>
                <i class="fa-solid fa-mobile-button"></i>
                <i class="fa-solid fa-info"></i>
              </div>
              
            </div> <!--admin end-->
      
          </div> <!-- Closing admin-details -->
      
      
        </div><!--dashboard details end end-->
      
      
      </div> <!--main content div end-->
      
      
 
    </div> <!--Main end-->



  </div>   <!--admin-container-div end-->
  





  <script src="assest/js/dashboard.js"></script>
</body>
</html>


