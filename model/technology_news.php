<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="../view/cards.css">

<title>National News</title>
</head>

<body >

  <?php

    include('navbar.php');
    include('marquee.php');

   ?>



<?php
$l = "localhost";
$r = "root";
$p = "";
$d = "discussion";

$link = mysqli_connect($l, $r, $p, $d);

// Define the tag you want to retrieve
$targetTag = "technology"; // Change this to the desired tag

// Fetch news articles with the specific tag
$sql = "SELECT * FROM news WHERE tags = '$targetTag'";
$result = mysqli_query($link, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) { ?>

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


<?php
    }
} else {
    echo "Error executing query: " . mysqli_error($link);
}

mysqli_close($link);


?>

 




 




<?php

include ('footer.php');

?>



</body>
</html>
