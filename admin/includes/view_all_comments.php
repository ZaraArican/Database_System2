 <table class="table table-bordered ">

      <thead>
          <tr>
              <th>ID</th>
              <th>Author</th>
              <th>Comment</th>
              <th>Email</th>
              <th>Status</th>
              <th>In Response to</th>
              <th>Date</th>
              <th>Approve</th>
              <th>Unapprove</th>
              <th>Delete</th>
        
          </tr>
      </thead>
    <tbody>
<?php      
        
$query="SELECT * FROM posts";
$select_posts=mysqli_query($connection,$query); 
while($row = mysqli_fetch_assoc($select_posts)){
    $comment_id=$row['comment_id'];
     $comment_post_id=$row['comment_post_id'];
    $comment_author=$row['comment_author'];
    $comment_content=$row['comment_content'];
    $comment_email=$row['comment_email'];
    $comment_status=$row['comment_status'];
    $comment_date=$row['comment_date'];
    $post_comment_count=$row['post_comment_count'];
    $post_date=$row['post_date'];

echo "<tr>";
echo "<td>$comment_id</td>";
echo "<td>$comment_author</td>";
echo "<td>$post_title</td>";
    
   $query="SELECT * FROM categories WHERE cat_id={$post_category_id}";    
$edit_categories=mysqli_query($connection,$query); 
while($row = mysqli_fetch_assoc($edit_categories)){
 $cat_id=$row['cat_id'];
$cat_title=$row['cat_title'];   
echo "<td>{$cat_title}</td>";
}
echo "<td>$post_status</td>";
echo "<td><img src='../images/$post_image' alt='image' width='50' height='50'></td>";
echo "<td>$post_tags</td>";
echo "<td>$post_comment_count</td>";
echo "<td>$post_date</td>";
echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";   
echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
echo "</tr>";
}      
?>     
  </tbody>
  </table>
  <?php
if(isset($_GET['delete'])){
    
    $the_post_id=$_GET['delete'];
    $query="DELETE FROM posts WHERE post_id=$the_post_id";
    $delete_query=mysqli_query($connection,$query);
        header("Location: view_all_posts.php");   
}
?>  