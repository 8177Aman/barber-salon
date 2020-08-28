<link rel="stylesheet" type="text/css" href="style.css">
<?php
include 'header.php';
include 'admin/gallery/functions.php';

/*****************offer Images start*******************/

// Connect to MySQL
$pdo = pdo_connect_mysql();
// MySQL query that selects all the images
$stmt = $pdo->query('SELECT * FROM offer ORDER BY o_date DESC');
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<hr>
<div class="content home">
  <h2>Offers</h2>
  <p>Welcome to the offer page, you can view the list of offer below.</p>
  <div class="images">
    <?php foreach ($images as $image): ?>
    <?php if (file_exists($image['image'])): ?>
    <a href="#">
      <img src="admin/<?=$image['image']?>"  data-id="<?=$image['id']?>" data-title="<?=$image['title']?>" width="300" height="200">
      
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
          <a href="offer.php?id=${img_meta.dataset.id}" class="trash" title="Delete Image"><i class="fas fa-trash fa-xs"></i>Delete</a>
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


<!--/*****************offer Images start*******************/-->

<?php include 'footer.php'; ?>