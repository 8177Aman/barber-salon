<?php 
include"db.php";
 ?>
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
      <a class="nav-link" href="index.php">Home</a>
    </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item bg-dark" href="ladies.php">Ladies</a>
          <a class="dropdown-item bg-dark" href="gents.php">Gents</a>
        </div>
      </li>
 <li class="nav-item">
      <a class="nav-link" href="admin/user_gallery.php">Gallery</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="admin/user_off.php">Offer</a>
    </li>
      <li class="nav-item">
      <a class="nav-link" href="blog_index.php">Blog</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="career.php">Career</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="contact.php">Contact Us</a>
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
