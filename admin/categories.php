<?php include "includes/admin_header.php" ?>
<div id="wrapper">

<!--Navigation -->
<?php include "includes/admin_navigation.php" ?>

<div id="page-wrapper">
<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
<div class="col-lg-12">
    <h1 class="page-header">
        Welcome to Admin
        <small>Author</small>
    </h1>   
    <div class="col=xs=6">
    
 <!--ADD TO CATEGORY -->   
<?php insert_categories(); ?>

   <form action="" method="post">
       <div class="form-group">
          <label for="cat-title">Add Category</label><br>
           <input type="text" name="cat_title">
       </div>
        <div class="form-group">
<input class="btn btn-primary" type="submit" name="submit" value="Add Category">
       </div>
       
   </form>
   
  <!-- UPDATE AND INCLUDE -->  
      <?php 
        if(isset($_GET['edit'])){
            $cat_id=$_GET['edit'];
            include "includes/update_categories.php";
        }     
        ?>
   
   <!--Add category form -->
   <div class="col-xs-6">
       <table class="table table-bordered ">
           <thead>
               <tr>
                   <th>Id</th>
                   <th>Category Title</th>
                   <th>Delete </th>
                   <th>Update</th>
               </tr>
           </thead>
           <tbody>
              
 <!--FIND ALL CATEGORIES QUERY -->             
<?php   findAllCategories();  ?>
 <!-- DELETE   -->   
  <?php delete_categories(); ?>
                                                                                                                                                                                                             
           </tbody>
       </table>
   </div>
   </div>
</div>
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include "includes/admin_footer.php" ?>