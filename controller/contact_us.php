<?php



$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];



$l="localhost";
$r="root";
$p="";
$d="discussion";


$m=mysqli_connect($l,$r,$p,$d);

$q="INSERT INTO contact_us(name,email,message) VALUES ('$name','$email','$message')";

$n=mysqli_query($m,$q);
if($n){  header("Location:../model/contact_us.php");}
else{ }




?>