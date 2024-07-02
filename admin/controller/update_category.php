

<?php
$l="localhost";
$r="root";
$p="";
$d="discussion";

$id=$_POST['id'];

$link=mysqli_connect($l,$r,$p,$d);

$category=$_POST['category'];






$q="UPDATE `news_category` SET `category`='$category'  WHERE id='$id'  ";

mysqli_query($link,$q);

header("Location:../model/manage_news.php");

?>