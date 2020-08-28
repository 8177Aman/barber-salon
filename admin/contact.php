<?php include"includes/header.php"; ?>
    <div id="wrapper">

        <!-- Navigation -->

<?php include"includes/navigation.php"; ?>
<?php include '../db.php'; ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                      <h1 class="page-header">
                          Welcome to Admin  
                          <small>Here You can Manage All Queries</small>
                      </h1>

<table class="table table-bordered table-hover ">
  <thead>
    <tr>
     <th>Id</th>
     <th>Name</th>
     <th>Number</th>
     <th>E-mail</th>    
     <th>Query</th>
     <th>Date And Time</th>
    </tr>
  </thead>
  <tbody>

<?php
  //  <!--DISPLAY USERS-->
$query="SELECT * FROM query  ";
$career=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($career))
{
$id = $row['id'];
$name = $row['name'];
$contact = $row['contact'];
$email = $row['email'];
$query = $row['query'];
$query_on = $row['query_on'];
echo "<tr>";
echo "<td>$id</td>";
echo "<td>$name</td>"; 
echo "<td>$contact</td>";
echo "<td>$email</td>";
echo "<td>$query</td>";
echo "<td>$query_on</td>";
echo "<td><a href='contact.php?delete={$id}'>Delete</a></td>";
echo "</tr>";

}
?>
</tbody>

 <?php
 //<!--DELETE users-->

 if(isset($_GET['delete']))
 {
$id=$_GET['delete'];
 $query="DELETE FROM query  WHERE id={$id}";
 $delete = mysqli_query($con,$query);
 echo "<script type='text/javascript'>window.location.href='contact.php'</script>";
 }

 ?>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include"includes/footer.php"; ?>
