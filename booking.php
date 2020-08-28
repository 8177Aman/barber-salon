<div class="appointment">
<?php include"header.php"; 
include 'db.php';
?>



<section class=" ">
	<div class="container-fluid text-center mt-5">
		<h3 class="text-muted">Book An Appointment Online</h3>
		<p class="">Our online bookings service operates between 10:00a.m. and 6:00p.m. <br>

During opening hours, we'll call you back within 1 hour to confirm your appointment. <br> Outside opening hours we will call you soon after 10:00am

Your data is safe with us! <br> We will only use your details to process your salon booking, and won't share them with third parties.</p>
<h4>Put Details To Get Appoint</h4>






<form action="" method="POST" >
		<div class="row  ">

			<div class="col-lg-2">
				
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					  <label for="name"  class="sr-only">name</label>				
					  <input type="text" class="form-control text-center" name="user_name" placeholder="Enter Your Name">
			    </div>
		
			    <div class="form-group" >
				    <label class="sr-only" for="contact">contact</label>
			   	    <input type="text" class="form-control text-center" name="user_contact" placeholder="Enter Contact Number"></i>
				</div>
		
        		<div class="form-group" >
				    <label class="sr-only" for="email">email</label>				
				    <input type="text" class="form-control text-center" name="user_email" placeholder="Enter Your Email-Id">
				</div>

				
				<div class="form-group" >
					<label class="sr-only" for="address">time</label>		
					<input type="time" class="form-control text-center" name="user_time" placeholder="Select Prefered Time">
				</div>

			</div>
		
		

		<div class="col-lg-4">
			<div class="form-group">
	            <label for="name" class="sr-only">gender</label>
				<select name="user_gender" id="input"  class="form-control text-center">
					<option value="">Select Gender</option>
	                <option value="male">Male</option>
	                <option value="female">Female</option>
	            </select>
            </div>
		
			<div class="form-group" >
				<label class="sr-only"  for="service_type">service_type</label>				
				<select name="user_service_type" class="form-control text-center" id="input">
					<option value=""> Select Service</option>
					<option value="home">Home Service</option>
					<option value="shop">On Shop</option>
				</select>
			</div>
		
			<div class="form-group" >
				<label class="sr-only" for="address">address</label>		
				<input type="text" class="form-control text-center" name="user_address" placeholder="Enter Address">
			</div>

			<div class="form-group" >
				<label class="sr-only" for="address">date</label>		
				<input type="date" class="form-control text-center" name="user_date" placeholder="Select Prefered Date">
			</div>

		</div>
		<div class="col-lg-2"></div>


		<div class="col-lg-6">
		 
    </div>

<div class="col-lg-12"><input type="submit" name="book" class="btn  btn-lg btn-danger justify-content-center text-light" value="Book Appointment"></div>

<?php 
if (isset($_POST['book'])) {

  $user_name=$_POST['user_name'];
  $user_contact=$_POST['user_contact'];
  $user_email=$_POST['user_email'];
  $user_gender=$_POST['user_gender'];
  $user_address=$_POST['user_address'];
  $user_service_type=$_POST['user_service_type'];
  $user_time=$_POST['user_time'];
  
  $user_date=date('d-m-y');

$query="INSERT INTO booking(user_email, user_contact,user_name,user_date, user_address,user_time,user_service_type,user_gender) VALUES('{$user_email}','{$user_contact}','{$user_name}',now(),'{$user_address}','{$user_time}','{$user_service_type}','{$user_gender}')";
$result=mysqli_query($con,$query);


    if (!$result) {
      die( "Query Failed .".mysqli_error($con));
    } else {
    	
    	echo "<script>window.location.href='booking.php'</script>";
     
    }
}?>

 
</div>
</form>
<h5>OR</h5>
 <h5 class="text-center"> Call On :+91 84218 92163 </h5>
	</div>







</section>




<?php include"footer.php"; ?>
</div>