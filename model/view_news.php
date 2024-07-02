<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="../view/cards.css">

<title>View News</title>
</head>

<body >

  <?php

    include('navbar.php');

   ?>



<?php
$l="localhost";
$r="root";
$p="";
$d="discussion";
$conn=mysqli_connect($l,$r,$p,$d) or die("Connection Failed");


$sql="select * from news";
$result= mysqli_query($conn,$sql) or die("Query Unsuccesful.");

if(mysqli_num_rows($result) > 0) {
?>


<?php
while($row = mysqli_fetch_assoc($result)){

  ?>

 <section class="main-content">
    <div class="news-cards">



      <div class="news-card">
              <img src=" <?php echo $row['image'];?> " alt="News Image">
              <div class="news-content">
                  <h2><?php echo $row['title']; ?></h2>
                  <p><?php echo $row['discription']; ?></p>
                  <a href="#" class="read-more">Read More</a>
              </div>
          </div>


  <?php } ?>

<?php } ?>
</section>
</div>




</body>
</html>
