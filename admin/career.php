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
                          <small>All Enquiries for Career</small>
                      </h1>

<table class="table table-bordered table-hover ">
  <thead>
    <tr>
     <th>Id</th>
     <th>Name</th>
     <th>Number</th>
     <th>E-mail</th>    
     <th>Gender</th>
     <th>Date</th>
     <th>Experince</th>
     <th>Expected Salary</th>
     <th>Address</th>
    </tr>
  </thead>
  <tbody>

<?php
  //  <!--DISPLAY USERS-->
$query="SELECT * FROM career  ";
$career=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($career))
{
$career_id = $row['career_id'];
$name = $row['name'];
$contact = $row['contact'];
$email = $row['email'];
$gender = $row['gender'];
$salary = $row['salary'];
$date = $row['date'];
$Experience = $row['experience'];
$address = $row['address'];
echo "<tr>";
echo "<td>$career_id</td>";
echo "<td>$name</td>"; 
echo "<td>$contact</td>";
echo "<td>$email</td>";
echo "<td>$gender</td>";
echo "<td>$date</td>";
echo "<td>$Experience</td>";
echo "<td>$salary</td>";
echo "<td>$address</td>";
echo "<td><a href='./career.php?delete={$career_id}'>Delete</a></td>";
echo "</tr>";

}
?>
</tbody>

 <?php
 //<!--DELETE users-->

 if(isset($_GET['delete']))
 {
$id=$_GET['delete'];
 $query="DELETE FROM career  WHERE career_id={$id}";
 $delete = mysqli_query($con,$query);
 echo "<script type='text/javascript'>window.location.href='career.php'</script>";
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
