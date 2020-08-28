<?php include"header.php"; ?>
<?php include"db.php"; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">


              <?php





$query="SELECT * FROM posts  ";
$select_posts=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($select_posts)){
$post_id=$row['post_id'];
$post_author=$row['post_author'];
$post_title=$row['post_title'];
$post_status=$row['post_status'];
$post_image=$row['post_image'];
$post_date=$row['post_date'];
 $post_content=$row['post_content'];










      //  $post_content=substr($row['post_content'],0,10);

if($post_status == 'published' ){


?>

<h1 class="page-header">
    Page Heading
    <small>Secondary Text</small>
</h1>

<!-- First Blog Post -->
<h2>
    <a href="blog.php?p_id=<?php echo $post_id; ?> "><?php echo $post_title; ?></a>
    </h2>

<p class="lead">
   by<a href="blog.php?author=<?php echo $post_author; ?>&p_id=<?php echo $post_id ;?> "> <?php echo $post_author; ?></a>
</p>
<p><span class="glyphicon glyphicon-time"></span><?php echo $post_date; ?></p>
<hr>
<a href="blog.php?p_id=<?php echo $post_id ?> ">
<img class="img-responsive" width="200" src="images/<?php echo $post_image; ?>" alt=""></a>
<hr>
<p><?php echo "$post_content"; ?> </p>
<a class="btn btn-primary" href="blog.php?p_id=<?php echo $post_id ;?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

<hr>



<?php      } }              ?>

</div>




                    <!-- /.row -->
                </div>

                

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
<?php include"footer.php"; ?>
