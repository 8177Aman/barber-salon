<?php include"header.php"; ?>
<?php include"db.php"; ?>
    <!-- Navigation -->


    <!-- Page Content -->
    <div class="container">

        <div class="row">

             <!-- Blog Entries Column -->
            <div class="col-md-8">


              <?php

              if (isset($_GET['p_id']))
              {

                $the_post_id=$_GET['p_id'];
              $view_query = "UPDATE posts SET post_views_count = post_views_count + 1 WHERE post_id= $the_post_id  ";
              $send_query = mysqli_query($con, $view_query );

              $query="SELECT * FROM posts WHERE  post_id = $the_post_id";
              $select_all_posts=mysqli_query($con,$query);

              while($row=mysqli_fetch_assoc($select_all_posts)){
                $post_title=$row['post_title'];
                $post_date=$row['post_date'];
                $post_image=$row['post_image'];
                $post_content=$row['post_content'];
                $post_title=$row['post_title'];
               
?>




<!-- First Blog Post -->
<h2>
    <a href="#"><?php echo $post_title ?></a>
</h2>
<p class="lead">
  <!-- by <?php echo $post_h ?><a href="index.php"></a>-->
</p>
<p><span class="glyphicon glyphicon-time"></span><?php echo $post_date ?></p>
<hr>
<img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
<hr>
<p><?php echo $post_content ?></p>

<hr>



<?php      }       } else{
header("Location: index.php");
}       ?>

             

</div>

                </div>

              
            </div>

        </div>
        <!-- /.row -->

       

        <!-- Footer -->
<?php include"footer.php"; ?>
