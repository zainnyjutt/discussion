<!DOCTYPE html>
<html>
<head>
    <title>Update Category-Discussion</title>
    <link rel="stylesheet" type="text/css" href="../view/add_category.css">
</head>
<body>
   </br> 
   </br>
   </br>
   </br>
   </br>

   <?php
$l="localhost";
$r="root";
$p="";
$d="discussion";

$id=$_GET['id'];

$link=mysqli_connect($l,$r,$p,$d);

   $s="select * from news_category where id='$id'";
   $q=mysqli_query($link,$s);
   while($row=mysqli_fetch_array($q)){
      $id=$row['id'];
      $category=$row['category'];
     

      }
      ?>


    <div class="container">
        <h1>Update Category</h1>
        <form class="category-form" method="POST" action="../controller/add_category.php">

            <input type="hidden" value="<?php echo $id ; ?>" >

            <label for="category-name">Category Name:</label>
            <input type="text" id="category-name" value="<?php echo $category ; ?>"  placeholder="Update category name" name="category" required>
            
            
            <input type="submit" value="Update Category">
        </form>
    </div>
</body>
</html>
