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
       <div class="container mt-5">
          <div class="mx-auto" style="max-width: 800px;">

            <table class="table align-middle mb-0 bg-white">

                    <thead class="bg-light">
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Availability</th>
                            <th>Edit</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php  
                        $category=getAllDetails('categories');

                        if(mysqli_num_rows($category)>0){

                            foreach($category as $item){
                                ?>
                                        <tr>

                                            <td>
                                                <?=$item['id'];  ?>
                                            </td>

                                            <td>
                                                <?=$item['name'];  ?>
                                            </td>

                                            <td>
                                                <img src="../uploads/<?= $item['image'] ?>" width="50px" height="50px"> 
                                            </td>

                                            <td>
                                                <?=$item['availability'] == '0'?"avaailable":"unavailable"  ?>
                                            </td>

                                            <td>
                                                <button type="button" class="btn btn-link btn-sm btn-rounded" href="">
                                                Edit
                                                </button>
                                            </td>

                                        </tr>
                                <?php
                            }


                        }else{
                            echo"No Data to be found";
                        }

                    ?>



                    </tbody>
            </table>

            </div>
        </div>

 
    </div> <!--Main end-->



  </div>   <!--admin-container-div end-->
  

<?php
include('includes/footer.php');
?>      