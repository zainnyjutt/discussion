<?php
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];



$l="localhost";
$r="root";
$p="";
$d="discussion";


$m=mysqli_connect($l,$r,$p,$d);



$i="INSERT INTO `userdata`(`username`, `email`, `password`) values('$username','$email','$password')";

$n=mysqli_query($m,$i);
if($n){  header("Location:../model/login.html");}
else{ }
	






?>