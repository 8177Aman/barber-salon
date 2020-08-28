<?php include"header.php";
$msg='';

if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$query=$_POST['query'];
	$query_on=date('Y-m-d');

$result=mysqli_query($con,"INSERT INTO query(name,contact,email,query,query_on) VALUES('$name','$contact','$email','$query','$query_on')");

if (!$result) {
	die('wtf'.mysqli_error($con));
} else {
	$msg="Thank you for $name connecting with us, will get back to you shortly.";
}



}





 ?>

<section>



	<div class="container-fluid">
		<img src="images/salon.jpg"  class="img-fluid" align="center"    alt="">

	</div>
	
</section>
  
<section class="mt-5 mb-5">
<div class="row">

	<div class="col-md-12" align="center" ><h2>Contact Us</h2><hr class="w-25 "></div>
	
	<div class="col-lg-2"></div>
	<div class="col-lg-4">

            <div align="center">
	            <p><span class="fas fa-map-marker-alt"></span>Creative Hair Dresses, Plot 80, Verma Layout, Hilltop, Ambazari, Nagpur - 440033 </p>
				<p><span class="fas fa-phone-alt"></span>Phone: +91 9970356404</p>
				<p><span class="far fa-envelope" aria-hidden="true"></span>Email: dineshyerwarkar@mail.com</p>
          </div>


		
		<h3 class="text-center">FOLLOW US ON</h3>
		    <center>
		     <a href="#" class="fa fa-facebook"></a>
			 <a href="#" class="fa fa-linkedin"></a>
			 <a href="#" class="fa fa-youtube"></a>
			 <a href="#" class="fa fa-instagram"></a>
			</center>

	</div>
	<div class="col-lg-6">
	
    <form action="" method="POST">
      <div class="form-group">
        <input type="text" name="name" class=" contact form-control-danger"   required="Please Fill This Field" placeholder="Name" >
      </div>

      <div class="form-group" >
        <input type="email" name="email" class="contact form-control-danger"   placeholder="Email-Id">
      </div>

      <div class="form-group">
        <input type="tel" name="contact" class="contact form-control-danger"  required="Please Fill This Field" placeholder="Contact">
      </div>

      <div class="form-group">
        <input type="text" name="query" class="contact form-control-danger"  required="Please Fill This Field" placeholder="Query">
      </div>

      <div>
        <input type="submit" name="submit" class=" btn  form-control-danger bg-primary" required="Please Fill This Field" value="Send Query" >
      </div>
     

<style >
	.contact{
		border-radius: 10px;
	}
</style>
     
    </form>
	
	</div>
	<div class="col-lg-12"> <center>
		<h2 class="text-danger"> <?php echo $msg; ?></h2>
	</center> </div>
	
</div>
  
</section>
<center>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d930.3631976988697!2d79.0490384291936!3d21.134371549121354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c06ef00e2f8d%3A0xd9e3dffa55e63da!2sCreative%20Hair%20Dressers!5e0!3m2!1sen!2sin!4v1598352319961!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></center>
<?php include"footer.php"; ?>