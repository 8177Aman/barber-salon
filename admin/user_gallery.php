<!DOCTYPE html>
<html lang="en">
<head>
  <title>The barber</title>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&family=Merriweather:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500&family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&family=Source+Code+Pro:ital,wght@0,200;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">



  <div id="myBtn "></div>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <img src="../images/mix3.png" class=" logo img-fluid" width="150"  height="75" alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="../index.php">Home</a>
    </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item bg-dark" href="../ladies.php">Ladies</a>
          <a class="dropdown-item bg-dark" href="../gents.php">Gents</a>
        </div>
      </li>
 <li class="nav-item">
      <a class="nav-link" href="#">Gallery</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="user_off.php">Offer</a>
    </li>
      <li class="nav-item">
      <a class="nav-link" href="../blog_index.php">Blog</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="../career.php">Career</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="../contact.php">Contact Us</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="../about.php">About Us</a>
    </li>
    
   
 
   


</head>
<body class="bg-light">



  </ul>
</nav>

<style>
  *{
    margin: 0; padding: 0; box-sizing: border-box;
  }
  .nav-item a{
    color: #fff !important;
    font-weight: bold;
  }
  *{
    margin: 0px;
    padding: 0px;
  }
  html{
    scroll-behavior: smooth;
  }
</style><?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'barber';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        // If there is an error with the connection, stop the script and display the error.
        die ('Failed to connect to database!');
    }
}




/*****************offer Images start*******************/
// Connect to MySQL
$pdo = pdo_connect_mysql();
// MySQL query that selects all the images
$stmt = $pdo->query('SELECT * FROM images ORDER BY i_date DESC');
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<hr>
<div class="content home">
  <h2>Gallery</h2>
  <p>Welcome to the offer page, you can view the list of gallery below.</p>
  <div class="images">
    <?php foreach ($images as $image): ?>
    <?php if (file_exists($image['image'])): ?>
    <a href="#">
      <img src="<?=$image['image']?>"  data-id="<?=$image['id']?>" height="400" width="500"  >
      
    </a>
    <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>
<div class="image-popup"></div>
<script>
// Container we'll use to show an image
let image_popup = document.querySelector('.image-popup');
// Loop each image so we can add the on click event
document.querySelectorAll('.images a').forEach(img_link => {
  img_link.onclick = e => {
    e.preventDefault();
    let img_meta = img_link.querySelector('img');
    let img = new Image();
    img.onload = () => {
      // Create the pop out image
      image_popup.innerHTML = `
        <div class="con">
          
          <img src="${img.src}" width="500" height="400">
        </div>
      `;
      image_popup.style.display = 'flex';
    };
    img.src = img_meta.src;
  };
});
// Hide the image popup container if user clicks outside the image
image_popup.onclick = e => {
  if (e.target.className == 'image-popup') {
    image_popup.style.display = "none";
  }
};
</script>


<!--/*****************End*******************/-->


<section class="some" align="center">
  <div class="container-fluid text-white"><br>
      <h3 class="head" align="center">SALON</h3>
        <h3 class="line" align="center" class="text-White"> Creative Hair Dresses <br> Experience hair stylist are here </h3>

        
        <center><table > <tr>
        <td><img src="../images/watch.png"  height="60" width="60"></td><td><p class="text-center mt-2">Our Salon Opening Time<br>8am to 10pm - 7 days a week<br>

        </p>
</td></tr></table></center>

      <tr>
        <td><a href="https://www.facebook.com/thebarberon/"><img src="../images/facebook.png" height="30" width="30"></a>
           <a href="#"><img src="../images/linkedin.png" height="60" width="60" ></a>
           <a href="https://www.youtube.com/channel/UCiObIEqUlapR9TBY-Q3J8JA/" ><img src="../images/youtube.png" height="60" width="60" ></a>
           <a href="https://www.instagram.com/thebarberon/" ><img src="../images/instagram.png" height="60" width="60" ></a></td>
         </tr>
       </div>


</section>

<footer class="text-center bg-dark">
  <p class="text-center text-light">Copyright &copy;  2020 by The Aman Yerwarkar AND Gaurav Sewatkar</p>
</footer>

<style>



.fa {
  padding: 20px;
  font-size: 50px;
  width: 55px;
  text-align: center;
  text-decoration: none;
  margin: 3px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}



.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}


.head {
  letter-spacing: 10px;
  font-family: 'Josefin Sans', sans-serif;
  font-family: 'Josefin Slab', serif;
}

.line,.text-center{
  font-family: 'Josefin Sans', sans-serif;
font-family: 'Josefin Slab', serif;

}

  .some{
    background-color: #535c68;
  }


</style>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,700;1,600&family=Josefin+Slab:wght@300&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,700;1,500;1,600&family=Josefin+Slab:wght@300&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</html>