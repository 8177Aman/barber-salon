
                          
                          <?php 
$msg='';
$con=new mysqli("localhost","root","","barber");
if (isset($_POST['upload'])) {
  $image=$_FILES['image']['name'];
  $path='slider_image/'.$image;

  $aql=$con->query("INSERT INTO slider(image) VALUES('$path')");
  if ($aql) {
   
    move_uploaded_file($_FILES['image']['tmp_name'], $path);
     $msg="SUCCESS";
    
  } else {
$msg="fuck you";
  }
  
}
$result=$con->query("SELECT image FROM slider ");
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    
  }
  </style>
</head>
<body>

<div id="demo" class="carousel slide pb-5 mb-5" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">

    <?php 
    $i=0;
    foreach ($result as $row ) {
     
     $actives='';
     if ($i==0) {
       $actives='active';
     }
  





     ?>
    <li data-target="#demo" data-slide-to="<?= $i; ?>" class="active"></li>
    <?php $i++; } ?>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
 <?php 
    $i=0;
    foreach ($result as $row ) {
     
     $actives='';
     if ($i==0) {
       $actives='active';
     }
     ?>

    <div class="carousel-item <?= $actives; ?>">
      <img src="<?= $row['image']?>"  width="1100" height="500">
    </div>

    <?php $i++;} ?>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<form action="" method="POST" enctype="multipart/form-data">
  <input type="file" name="image">
  <input type="submit" name="upload" value="upload">
</form>

</body>
</html>
<h3><?php echo$msg; ?></h3>