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
  <img src="images/mix3.png" class=" logo img-fluid" width="150"  height="75" alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="../../index.php">Home</a>
    </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item bg-dark" href="../../ladies.php">Ladies</a>
          <a class="dropdown-item bg-dark" href="gents.php">Gents</a>
        </div>
      </li>
 <li class="nav-item">
      <a class="nav-link" href="#">Gallery</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../../offer.php">Offer</a>
    </li>
      <li class="nav-item">
      <a class="nav-link" href="../../blog_index.php">Blog</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="../../career.php">Career</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="../../contact.php">Contact Us</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="../../about.php">About Us</a>
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
</style>

<?php
include 'functions.php';

// Connect to MySQL
$pdo = pdo_connect_mysql();
// MySQL query that selects all the images
$stmt = $pdo->query('SELECT * FROM images ORDER BY i_date DESC');
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="content home">
	<h2>Gallery</h2>
	<p>Welcome to the gallery page, you can view the list of images below.</p>
	
	<div class="images">
		<?php foreach ($images as $image): ?>
		<?php if (file_exists($image['image'])): ?>
		<a href="#">
			<img src="<?=$image['image']?>" alt="<?=$image['description']?>" data-id="<?=$image['id']?>" data-title="<?=$image['title']?>" width="300" height="200">
			<span><?=$image['description']?></span>
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
					<h3>${img_meta.dataset.title}</h3>
					<p>${img_meta.alt}</p>
					<img src="${img.src}" width="${img.width}" height="${img.height}">
					<a href="delete.php?id=${img_meta.dataset.id}" class="trash" title="Delete Image"><i class="fas fa-trash fa-xs"></i></a>
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
<?=include'../../footer.php';?>