<?php

if (isset($_POST['create_post'])) {


  $post_author=$_POST['author'];
  $post_title=$_POST['title'];
  $post_status=$_POST['post_status'];

  $post_image=$_FILES['image']['name'];
  $post_image_temp= $_FILES['image']['tmp_name'];
  $post_content=$_POST['post_content'];
  //$post_comment_count=4;
  $post_date=date('d-m-y');
$folder="../images/$post_image" ;//it is path where to save image

move_uploaded_file($post_image_temp,$folder);//function to upload image


$query="INSERT INTO posts( post_title,post_author,post_date, post_image,post_content,post_status) VALUES('{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_status}')";
$result=mysqli_query($con,$query);

  if (!$result) {
  die( "Query Failed .".mysqli_error($con));
}

$the_post_id=mysqli_insert_id($con);
  echo "<p class='bg-success'> Post Created Successfully : ".""."<a href='post.php?p_id=$the_post_id'>View Posts</a> or <a href='post.php'>Edit More Posts</a></p>";

}

 ?>



 <form class="" action="" method="post" enctype="multipart/form-data">

   <div class="form-group">
     <label for="title">Post Title</label>
     <input type="text" class="form-control" name="title" >
    </div>



     <div class="form-group">
       <label for="author">Post Author</label>
       <input type="text" class="form-control" name="author" >
      </div>

      <div class="form-group">
        <select class="" name="post_status">
        <option value="">Select Post Status</option>
        <option value="published">Published</option>
        <option value="draft">Draft</option>
        </select>
      </div>


       <div class="form-group">
         <label for="image">Post Image</label>
         <input type="file" name="image" >
         </div>

      
          <div class="form-group">
            <label for="post_content">Post content</label>
            <textarea class="form-control" name="post_content" id="body" col='30' rows='10'>
            </textarea>
           </div>

           <div class="form-group">

             <input type="submit" class="btn btn-primary" name="create_post" value='publish Post' >
            </div>
 </form>
