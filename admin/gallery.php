<link rel="stylesheet" type="text/css" href="style.css">
  <?php include"includes/header.php";
   include '../db.php'; ?>

      <div id="wrapper">


          <!-- Navigation -->

  <?php include"includes/navigation.php"; ?>
          <div id="page-wrapper">

              <div class="container-fluid">

                  <!-- Page Heading -->
                  <div class="row">
                      <div class="col-lg-12">
                          <h1 class="page-header">
                              Welcome to Admin <small>Here You can Manage All Image for gallery</small>
                          </h1>
                          <?php
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



// The output message
$msg = '';
// Check if user has uploaded new image
if (isset($_FILES['image'])) {
  // The folder where the images will be stored
  $target_dir = 'offer_images/';
  // The path of the new uploaded image
  $image_path = $target_dir . basename($_FILES['image']['name']);
  // Check to make sure the image is valid
  if (!empty($_FILES['image']['tmp_name']) && getimagesize($_FILES['image']['tmp_name'])) {
    if ($_FILES['image']['size'] > 5000000) {
      $msg = 'Image file size too large, please choose an image less than 500kb.';
    } else {
      // Everything checks out now we can move the uploaded image
      move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
      // Connect to MySQL
      $pdo = pdo_connect_mysql();
      // Insert image info into the database (title, description, image path, and date added)
      $stmt = $pdo->prepare('INSERT INTO images VALUES (NULL,?, CURRENT_TIMESTAMP)');
          $stmt->execute([$image_path]);
      $msg = 'Image uploaded successfully!';
      echo "<script>window.location.href='gallery.php'</script>";
    }
  } else {
    $msg = 'Please upload an image!';
  }
}
?>


<div class="content upload">
  <h2>Upload Image</h2>
  <form action="" method="post" enctype="multipart/form-data">
    <label for="image">Choose Image</label>
    <input type="file" name="image"  id="image">
      <input type="submit" value="Upload Image" name="submit">
  </form>
  <p><?=$msg?></p>
</div>


<?/***********Upload Function end Here*********/ ?>

<?php
/*****************images Images start*******************/
// Connect to MySQL
$pdo = pdo_connect_mysql();
// MySQL query that selects all the images
$stmt = $pdo->query('SELECT * FROM images ORDER BY i_date DESC');
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<hr>
<div class="content home">
  <h2>imagess</h2>
  <p>Welcome to the images page, you can view the list of images below.</p>
  <div class="images">
    <?php foreach ($images as $image): ?>
    <?php if (file_exists($image['image'])): ?>
    <a href="#">
      <img src="<?=$image['image']?>"  data-id="<?=$image['id']?>" data-title="<?=$image['title']?>" width="300" height="200">
      
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
          <a href="gallery.php?id=${img_meta.dataset.id}" class="btn btn-danger" title="Delete Image"><i class="fas fa-trash fa-xs"></i>Delete</a>
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


<!--/*****************offer End  Images start*******************/-->




<?php
/*****************Delete Function*******************/

$pdo = pdo_connect_mysql();
$msg = '';
// Check that the poll ID exists
if (isset($_GET['id'])) {
  
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM images WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $image = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$image) {
        die ('Image doesn\'t exist with that ID!');
    }
    // Make sure the user confirms beore deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete file & delete record
            unlink($image['image']);
            $stmt = $pdo->prepare('DELETE FROM images WHERE id = ?');
            $stmt->execute([$_GET['id']]);
            // Output msg
            $msg = 'You have deleted the image!';
          
        } else {
            // User clicked the "No" button, redirect them back to the home/index page
            header('Location: gallery.php');
            exit;
        }
    }
} else {
    die ('');
}
?>

<div class="content delete">
    <h2>Delete Image #<?=$image['id']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
    <p>Are you sure you want to delete This Offer?</p>
    <img src="<?=$image['image']?>"  data-id="<?=$image['id']?>" data-title="<?=$image['title']?>" width="300" height="200"> <br>
    <div class="yesno">
        <a href="offer.php?id=<?=$image['id']?>&confirm=yes">Yes</a>
        <a href="offer.php?id=<?=$image['id']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>
