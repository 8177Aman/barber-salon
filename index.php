<?php include"header.php"; 
include"db.php";?>
<style>
  


   /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 700px !important;
  }



  
#brand{
  background: #f1f2f6 ;
}
.heading{
  font-family: 'Josefin Sans', sans-serif;
font-family: 'Libre Baskerville', serif;
}
p{
  font-family: 'Cairo', sans-serif;
font-family: 'Merriweather', serif;

}


</style>
 
<?php 

$result=$con->query("SELECT image FROM slider ");
 ?>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 500px;
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
    <li data-target="#demo" data-slide-to="<?= $i; ?>" ></li>
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
      <img src="<?= $row['image']?>"  >
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




<!--OUR SERVICES-->
<section id="service" class="mt-3 ">
 <div class="container text-center mt-5 ">
   <h2 class="heading " >OUR SERVICES</h2 >
   <hr >
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <a href="gents.php"><img class="img-fluid w-100 " src="images/gents_1.jpg" height="300"  ></a>
      </div>
      <div class="col-sm-12 col-md-6">
       <a href="ladies.php"><img class="img-fluid" src="images/ladies_1.jpg" height="300" width="1000" > </a>
      </div>
    </div>
  </div>

 <br>


</section>





<!--BRAND-->
<section id="brand">
<div class="container text-center pt-5 mt-5 ">
  <h2 class="heading">BRAND</h2><p class="text-center">No skin issue is our guarantee.</p>   
<!--1st row of brand-->
   
      <div class="row text-center">
      <div class=" col-lg-3">
        <center>
          <img src="images/Andis.png" align="left" class="rounded" height="150" width="150" alt="" >
        </center>
      </div>

      <div class=" col-lg-3">
          
            <img src="images/loreal.png "  class="rounded" height="150" width="150"  alt="" >
       
      </div>

      <div class=" col-lg-3">
         
            <img src="images/ikonic-removebg-preview.png " align="right" class="mt-5" height="50" width="150"  alt="" >
         
      </div>

      <div class=" col-lg-3">
          <center>
            <img src="images/wella.png" class="rounded" align="right" height="150" width="150" alt="" >
          </center>
      </div>

    </div>
</div>
  

    <!--2st row of brand-->
    
      <div class="row text-center">
      
      <div class=" col-lg-3">
         <img src="images/sch_product.png" class="rounded" align="right" height="150" width="150" alt="" >
       
      </div>

      <div class=" col-lg-3">
          
             <img src="images/streax.png" style="padding-left: 50px;" height="150" width="200"  alt="" >
                          
      </div>

      <div class=" col-lg-3">
        <center>
            <img src="images/wahal.png" class="rounded"  height="150" width="150" alt="" >
          </center>
        </div>

        <div class=" col-lg-3">
        <center>
            <img src="images/Cheryls_PNG__1_-removebg-preview.png" class="rounded"  align="left" height="150" width="150" alt="" >
          </center>
        </div>
        

    </div>

    


</section>


<!--GALLERY -->

</body> 

<center>
<?php echo " <a href='booking.php'><p
 class='btn btn-secondary btn-lg active mt-5 mb-5'  role='button' aria-pressed='true'> Book Appointment</p></a>
"; ?></center>



<?php include"footer.php"; ?>