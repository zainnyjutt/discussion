<?php



$title=$_POST['title'];
$discription=$_POST['discription'];
$author=$_POST['author'];
$image=$_POST['image'];
$category=$_POST['category'];
$tags=$_POST['tags'];



$l="localhost";
$r="root";
$p="";
$d="discussion";


$m=mysqli_connect($l,$r,$p,$d);

$q="INSERT INTO news(title,discription,author,image,category,tags) VALUES ('$title','$discription','$author','$image','$category','$tags')";

$n=mysqli_query($m,$q);
if($n){  header("Location:../model/manage_news.php");}
else{ header("Location:../model/error_add_news.html");}




?>