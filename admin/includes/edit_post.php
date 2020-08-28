<?php
if (isset($_GET['p_id'])) {
$the_post_id= $_GET['p_id'];
}
$query="SELECT * FROM posts WHERE post_id={$the_post_id}  ";
$select_posts_by_id=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($select_posts_by_id)){
$post_id=$row['post_id'];
$post_author=$row['post_author'];
$post_title=$row['post_title'];
$post_category_id=$row['post_category_id'];
$post_status=$row['post_status'];
$post_image=$row['post_image'];
$post_content=$row['post_content'];
$post_date=$row['post_date'];

}
if (isset($_POST['update_post'])) {


  $post_author = $_POST['author'];
  $post_title = $_POST['title'];
  $post_status = $_POST['post_status'];
  $post_image = $_FILES['image']['name'];
  $post_image_temp = $_FILES['image']['tmp_name'];
  $post_content = $_POST['post_content'];


if($_FILES['image']['name']!=''){
        $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
         move_uploaded_file($post_image_temp,"../image/$post_image");
        $update_sql="update posts set post_author='{$post_author}',post_title='{$post_title}',post_date= now(),post_status='{$post_status}',post_content='{$post_content}',post_image='{$post_image}' where id='$id'";
      }else{
        $update_sql="update posts set post_author='{$post_author}',post_title='{$post_title}',post_date= now(),post_status='{$post_status}',post_content='{$post_content}' where post_id={$the_post_id}";
      }
      mysqli_query($con,$update_sql);




















/*

  move_uploaded_file($post_image_temp,"../image/$post_image");//function to upload image

if (isset($_POST['post_image'])) {
$query="SELECT post_image FROM posts WHERE post_id = $the_post_id";
$select_image=mysqli_query($con,$query);
while($row = mysqli_fetch_array($select_image)){
$post_image = $row['post_image'];
}

}
        $query="UPDATE posts SET ";
        $query.="post_author='{$post_author}', ";
        $query.="post_title='{$post_title}', ";
        $query.="post_date= now(), ";
        $query.="post_status='{$post_status}', ";
        $query.="post_image='{$post_image}', ";
       
        $query.="post_content='{$post_content}' ";
        $query.="WHERE post_id={$the_post_id}";

          $update_post = mysqli_query($con,$query);
          
          if (!$update_post) {
          die( "Query Failed .".mysqli_error($con));
        }*/

            echo "Post Updated : ".""."<a href='post.php'>View All Posts</a>";

}

 ?>

 <form class="" action="" method="post" enctype="multipart/form-data">

   <div class="form-group">
     <label for="title">Post Title</label>
     <input value="<?php echo "$post_title"; ?>"  type="text" class="form-control" name="title" >
    </div>

   

     <div class="form-group">
       <label for="author">Post Author</label>
       <input value="<?php echo $post_author; ?>" type="text" class="form-control" name="author" >
      </div>


<div class="form-group">
       <div class="form-group">
        <select class="" name="post_status">
        <option value="">Select Post Status</option>
        <option value="published">Published</option>
        <option value="draft">Draft</option>
        </select>
      </div>
</div>


       <div class="form-group">
         <label for="image">Post Image</label>
         <input name='image' type="file"><img src="../image/<?php echo "$post_image"; ?>" width='100' >
         </div>

          <div class="form-group">
            <label for="post_content">Post content</label>
            <textarea class="form-control"  name="post_content" id="" col='' rows='10' value=""> <?php echo $post_content; ?>
            </textarea>
           </div>

           <div class="form-group">
             <input type="submit" class="btn btn-primary" name="update_post" value='Update Post' >
            </div>
 </form>
