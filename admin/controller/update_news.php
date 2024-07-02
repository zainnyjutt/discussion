

<?php
$l="localhost";
$r="root";
$p="";
$d="discussion";

$id=$_POST['id'];

$link=mysqli_connect($l,$r,$p,$d);

$title=$_POST['title'];
$discription=$_POST['discription'];
$author=$_POST['author'];
$image=$_POST['image'];
$category=$_POST['category'];
$tags=$_POST['tags'];






$q="UPDATE `news` SET `title`='$title',`discription`='$discription',`author`='$author',`image`='$image',`category`='$category',`tags`='$tags' WHERE id='$id' ";

mysqli_query($link,$q);

header("Location:../model/manage_news.php");

?>