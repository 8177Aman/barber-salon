<?php include"admin_header.php"; ?>
    <div id="wrapper">

      
<?php include"../db.php"; ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                      <h1 class="page-header">
                          Welcome to Admin <small>Here You can Manage All Your blogs</small>
                      </h1>

<?php
if (isset($_GET['source'])) {
  $source=$_GET['source'];
}else {
  $source='';
}
switch ($source) {
  case 'add_post':
    include 'add_post.php';
    break;

case 'edit_post':
  include 'edit_post.php';
  break;

  default:
include "view_all_post.php";
    break;
} 
 ?>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include"admin_footer.php"; ?>
