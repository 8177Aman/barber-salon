<?php

    include"includes/header.php"; ?>
   <?php include '../db.php';?>

<?php 

$msg='';

if (isset($_POST['upload'])) {
  $image=$_FILES['image']['name'];
  $target='slider_image/'.$image;
  $path='../slider_image/'.$image;

  $sql=$con->query("INSERT INTO slider(image) VALUES('$target')");
  if ($sql) {
   
    move_uploaded_file($_FILES['image']['tmp_name'], $path);
     $msg="SUCCESS";
     header('location:slider.php');
  } else {
$msg="fuck you";
  }
  
}
$result=$con->query("SELECT image FROM slider ");
 ?> 
      <div id="wrapper">


          <!-- Navigation -->

  <?php include"includes/navigation.php"; ?>
          <div id="page-wrapper">

              <div class="container-fluid">

                  <!-- Page Heading -->
                  <div class="row">
                      <div class="col-lg-12">
                          <h1 class="page-header">
                              Welcome to Admin <small>Here You can Manage All Images for Slider</small>
                          </h1>
                          <form class="form-inline" action="" method="POST" enctype="multipart/form-data" >
                        <div class="form-group">
                          <label class="sr-only" for="email">Email address:</label>
                          <input type="file" name="image" class="form-control" id="email">
                        </div>
                      
                        <button type="submit" name="upload" class="btn btn-default">Submit</button>
                        <h4><?php echo$msg; ?></h4>
                      </form>
                          <table class="table table-bordered table-hover">
                            <tr>
                            <th>id</th>
                            <th>Image</th>
                            <th>Delete</th>
                            </tr>
                            <?php 
                            $query="SELECT * FROM slider ";
                            $result=mysqli_query($con,$query);
                            while ($row=mysqli_fetch_assoc($result)) {
                            $id=$row['id'];
                            $image=$row['image'];


                            echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td><img class='img-responsive' width='50'  src='../$image' alt='image'></td>";
                            echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to image?'); \" href='?delete={$id}'>Delete</a></td>";
                            echo "</tr>";
                            }


                             ?>
                          </table>
                         <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <?php 
                          $i=0;                          
                          foreach ($result as $row ) {
                            $actives='';
                            if ($i==0) {
                             $actives='active';
                            } 
                            
                            ?>
                          <li data-target="#myCarousel" data-slide-to="<?php $i; ?>" class="active"></li>
                          <?php $i++; }?>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <?php 
                          $i=0;                          
                          foreach ($result as $row ) {
                            $actives='';
                            if ($i==0) {
                             $actives='active';
                            } 
                            
                            ?>
                            
                          <div class="item <?= $actives; ?>">
                            <img src="../<?= $row['image']?>"   width='100%' height='10%'  >
                           
                          </div>
                           <?php $i++; }?>                          
                        </div>
                
                        

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                      <div>
                        
                      </div>
                          
                      </div>
                  </div>
                  <!-- /.row -->



           <!-- /.row -->

         

<?php 

if(isset($_GET['delete']))
{
  $the_post_id=$_GET['delete'];
  $query="DELETE FROM slider WHERE id={$the_post_id}  ";
  $delete_query=mysqli_query($con,$query);
  echo "<script type='text/javascript'>window.location.href='slider.php'</script>";

}  ?>





              </div>
              <!-- /.container-fluid -->

          </div>
          <!-- /#page-wrapper -->
          

      <?php include"includes/footer.php"; ?>
