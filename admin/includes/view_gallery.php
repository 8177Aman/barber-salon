



<table class="table table-bordered table-hover ">
  <thead>
    <tr>
     <th>Id</th>
      <th>Images</th>
     <th>Date</th>
     <th>Delete</th>
    </tr>
  </thead>


  <tbody>
<?php
$query="SELECT * FROM gallery ";
$select_posts=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($select_posts)){
$g_id=$row['g_id'];
$image=$row['image'];
$g_date=$row['g_date'];
echo "<tr>";

?>



<?php
echo "<td>$g_id</td>";
echo "<td><img class='img-responsive' width='50'  src='../images/$image' alt='image'></td>";
echo "<td>$g_date</td>";
echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete image?'); \" href='./gallery.php?delete={$g_id}'>Delete</a></td>";
echo "</tr>";

}


if(isset($_GET['delete']))
{
  $the_g_id=$_GET['delete'];
  $query="DELETE FROM gallery WHERE g_id={$the_g_id}  ";
    $delete_query=mysqli_query($con,$query);

} ?>
  </tbody>
 </table>
</form>