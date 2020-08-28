<?php include"header.php";

 include"db.php"; ?>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


	</head>
	<body>

<div class="container-fluid text-center mt-5 bg-light">
 <h1 >CAREER</h1>
 <p class="bg-inverse">Being the learning organization THE BARBER welcome talent and passion in any size, form and pattern. We are absolutely for gender, age, creed, race or ethnicity when it comes to delivering the results. All that counts to become a part of the "The Barber" family is absolute passion for Salon $ spa industry towards anticipated result. If you think you can fit the bill and if you are the one we are looking for, you will hear form us soon. All the best!</p>
</div>

<div class="container">
 <img src="images/job.jpg" class="mx-auto d-block" alt="" width="350" height="290" >
 </div>


<hr>

<div class="container-fluid mb-5">
 <h2 class="text-center">Apply Here</h2>
 <hr class="w-25 mx-auto">
 <form action="" method="POST"  >
		<div class="row car" >

			
				<div class="form-group">

				<label for="name"  class="sr-only">name</label>				
				<input type="text" class="form-control text-center" required autocomplete="off" name="name" size="50" placeholder="Enter Your Name">
		
				<label class="sr-only mb-2" for="contact">contact</label>
			    <input type="text" class="form-control text-center" required autocomplete="off" name="contact" contact="contact" placeholder="contact"></i>
		
				<label class="sr-only" for="email">email</label>				
				<input type="email" class="form-control text-center" required autocomplete="off" name="email" placeholder="email">
			
				<label class="sr-only" for="experience ">experience</label>				
				<input type="text" class="form-control text-center" required autocomplete="off" name="experience" placeholder="Your Experience">
		
				<label class="sr-only" for="Expected Salary">Expected Salary</label>				
				<input type="text" class="form-control text-center" required autocomplete="off" name="salary" placeholder="Expected Salary">
		
				<label class="sr-only" for="address">address</label>		
				<input type="text" class="form-control text-center" required autocomplete="off" name="address" placeholder="address">

            <label for="gender" class="sr-only">gender</label>
			<select name="gender" id="input"  class="form-control text-center">
				<option class="text-center" value="">Select Gender</option>
              <option  class="text-center" value="male">Male</option>
              <option class="text-center" value="female">Female</option>
            </select>
      

<div class="col-lg-12 mt-2" align="center">
<button type="submit" align="center" name="apply" class="btn  btn-lg ">Apply Here</button>
</div>

</div></div></form>

<?php 

if (isset($_POST['apply'])) {


$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$experience=$_POST['experience'];
$salary=$_POST['salary'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$date=date('d-m-y');

$query="INSERT INTO career(name, contact,email,date, address,experience,gender,salary) VALUES('{$name}','{$contact}','{$email}',now(),'{$address}','{$experience}','{$gender}','{$salary}')";
$result=mysqli_query($con,$query);


    if (!$result) {
      die( "Query Failed What The Fuck .".mysqli_error($con));
    } else {
      echo "<script >window.location.href='career.php'</script>";
    }



}


 ?>


</div>
</div>


<style>
	.car{
		padding-left: 535px;

	}
	
 .btn{
	 background-color: #b2bec3;
 }
</style>

<?php include"footer.php"; ?>
