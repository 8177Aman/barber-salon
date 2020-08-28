<?php
if (isset($_POST['checkBoxArray']))
{

  foreach ($_POST['checkBoxArray'] as $postValueId)
  {
     $bluck_options = $_POST['bulk_options'];
     switch ($bluck_options) {
       case 'published':
        $query="UPDATE posts SET post_status= '{$bluck_options}' WHERE post_id={$postValueId}";
        $update_to_published_status = mysqli_query($con,$query);
        if (!$update_to_published_status) {
        die( "Query Failed .".mysqli_error($con));
        }
       break;

       case 'draft':
       $query="UPDATE posts SET post_status= '{$bluck_options}' WHERE post_id={$postValueId}";
       $update_to_draft_status = mysqli_query($con,$query);
       if (!$update_to_draft_status) {
       die( "Query Failed .".mysqli_error($con));
       }

         break;

         case 'delete':
         $query="DELETE FROM posts  WHERE post_id={$postValueId}";
         $delete_status = mysqli_query($con,$query);
         if (!$delete_status) {
         die( "Query Failed .".mysqli_error($con));
         }
           break;

           case 'clone':
           $query="SELECT * FROM posts WHERE post_id = '{$postValueId}'";
           $select_post_posts=mysqli_query($con,$query);
           while($row=mysqli_fetch_assoc($select_post_posts)){
             $post_author=$row['post_author'];
             $post_title=$row['post_title'];
             $post_status=$row['post_status'];
             $post_image=$row['post_image'];
             $post_content=$row['post_content'];
             $post_date=$row['post_date'];


           }
           $query="INSERT INTO posts( post_title,post_author,post_date, post_image,post_content,post_status) VALUES('{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_status}')";
           $copy_query=mysqli_query($con,$query);

             if (!$copy_query) {
             die( "Query Failed .".mysqli_error($con));
           }
             break;
     }
  }
}


 ?>

 <form class="" action="" method="post">
   <table class="table table-bordered table-hover">
     <div id="bulkOptionContainer=" class="col-xs-4">
       <select class="form-control" name="bulk_options" id="">
         <option value="">Select Options</option>
         <option value="published">Publish</option>
         <option value="draft"> Draft</option>
         <option value="delete"> Delete</option>
         <option value="clone">Clone </option>
       </select>
     </div>

     <div class="col-xs-4">
       <input type="submit" name="submit" class="btn btn-success" value="Apply">
       <a class="btn btn-primary" href="post.php?source=add_post">Add New</a>

     </div>
   </table>







<table class="table table-bordered table-hover ">
  <thead>
    <tr>
      <th><input type="checkbox" id="selectAllBoxes" class="checkBoxes" value=""></th>
     <th>Id</th>
     <th>Author</th>
     <th>Title</th>
     <th>Status</th>
     <th>Images</th>
     <th>Date</th>
     <th>View Blog</th>
     <th>Edit</th>
     <th>Delete</th>
    </tr>
  </thead>


  <tbody>
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
echo "<tr>";

?>


<td><center><input type="checkbox" class="checkBoxes" name='checkBoxArray[]' value="<?php echo $post_id; ?>"></center></td>

<?php
echo "<td>$post_id</td>";
echo "<td>$post_author</td>";
echo "<td>$post_title</td>";
echo "<td>$post_status</td>";
echo "<td><img class='img-responsive' width='50'  src='../images/$post_image' alt='image'></td>";
echo "<td>$post_date</td>";
echo "<td><a href='../blog.php?p_id={$post_id}'>View Blog</a></td>";

echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to Edit Blog?'); \" href='./post.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to Delete Blog?'); \" href='./post.php?delete={$post_id}'>Delete</a></td>";
echo "</tr>";

}


if(isset($_GET['delete']))
{
  $the_post_id=$_GET['delete'];
  $query="DELETE FROM posts WHERE post_id={$the_post_id}  ";
    $delete_query=mysqli_query($con,$query);

} ?>
  </tbody>
 </table>
</form>