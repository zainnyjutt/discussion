<?php
$l="localhost";
$r="root";
$p="";
$d="discussion";

$id=$_GET['id'];

$link=mysqli_connect($l,$r,$p,$d);

$q="DELETE FROM news_category WHERE id='$id' ";





mysqli_query($link,$q);

header("Location:../model/manage_categories.php");
?>