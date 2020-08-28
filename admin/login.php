<style >
	*{
		padding: 0px; margin: 0px;
	}
	.login{
		padding-top: 180px;
		padding-left: 650px;
	}
</style>
<?php
session_start();
include '../db.php';
include '../function.php';
  $msg=''; ?>
<!DOCTYPE html>
<html>
<head>
	<title>login to admin </title>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&family=Source+Code+Pro:ital,wght@0,200;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<section class="login" >
	<div class="row" >		
	
	
		<form method="POST" action="">	
			<center><h1 class="text-primary" >Login</h1>	
			<div class="mt-2 mb-2">
			<input type="text"  class="form-control " name="username" autocomplete="off" placeholder="Enter username" > </div>	
			<div class=" mb-2">
			<input type="text" class="form-control" name="password"  placeholder="Enter password" ></div>	
		<input type="submit" class="btn btn-dark " name="submit"></center>
		<?php echo $msg; ?>
	</form>
	</div>


</section>
<?php 
if (isset($_POST['submit'])) {

	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="select * from admin where username='$username' and password='$password'";
  $result=mysqli_query($con,$sql);
  // if (!$res) {
  // 	die("fuck".mysqli_error($con));
  // } 
  if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $_SESSION['IS_LOGIN']='yes';
    $_SESSION['ADMIN_USER']=$row['name'];
    redirect('index.php');
    // header('location:index.php');
  }else{
    $msg="Please enter valid login details";
  }
	




	// if(mysqli_num_rows($res)>0){
 //    $row=mysqli_fetch_assoc($res);
 //    $_SESSION['IS_LOGIN']='yes';
 //    $_SESSION['ADMIN_USER']=$row['name'];
 //    redirect('index.php');
 //  }else{
 //    $msg="Please enter valid login details";
 //  }



	
	 
}

 ?>
</body>
</html>
<?php 

 ?>