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
                          <small>All Bookings</small>
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
     <th>Time</th>
     <th>Service Type</th>
     <th>Address</th>
    </tr>
  </thead>
  <tbody>

<?php
  //  <!--DISPLAY USERS-->
$query="SELECT * FROM booking  ";
$select_users=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($select_users))
{
$user_id = $row['user_id'];
$user_name = $row['user_name'];
$user_contact = $row['user_contact'];
$user_email = $row['user_email'];
$user_gender = $row['user_gender'];
$user_service_type = $row['user_service_type'];
$user_date = $row['user_date'];
$user_time = $row['user_time'];
$user_address = $row['user_address'];
echo "<tr>";
echo "<td>$user_id</td>";
echo "<td>$user_name</td>";
echo "<td>$user_contact</td>";
echo "<td>$user_email</td>";
echo "<td>$user_gender</td>";
echo "<td>$user_date</td>";
echo "<td>$user_time</td>";
echo "<td>$user_service_type</td>";
echo "<td>$user_address</td>";

echo "<td><a href='./users.php?delete={$user_id}'>Delete</a></td>";
echo "</tr>";

}
?>
</tbody>
</table>

 <?php
 //<!--DELETE users-->

 if(isset($_GET['delete']))
 {
   $the_user_id=$_GET['delete'];
   $query="DELETE FROM booking WHERE user_id={$the_user_id}";
   $delete_user_query=mysqli_query($con,$query);
 echo "<script>window.location.href='users.php'</script>";
 }

 ?>
