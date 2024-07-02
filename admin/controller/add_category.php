<?php



$category=$_POST['category'];



$l="localhost";
$r="root";
$p="";
$d="discussion";


$m=mysqli_connect($l,$r,$p,$d);

$q="INSERT INTO `news_category`(`category`) VALUES ('$category')";

$n=mysqli_query($m,$q);
if($n){  header("Location:../model/manage_categories.php");}
else{ header("Location:../model/add_category_error.php");}




?>