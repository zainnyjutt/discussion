<?php
    session_start();
    $message="";
   
$servername="localhost";
$user="root";
$pass="";
$database="discussion";
$email=$_POST["email"];
$password=$_POST["password"];
$link=mysqli_connect($servername,$user,$pass,$database);
     
		$qry="SELECT * FROM userdata WHERE email='$email' and password='$password'";
		
        $result = mysqli_query($link,$qry);
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
       $_SESSION["username"] = $row['username'];
		$_SESSION["email"] = $row['email'];
        $_SESSION["password"] = $row['password'];
		if(null!==$_SESSION["email"] AND $_SESSION["password"]) {
  header("Location:../model/index.php");
    }else {
        
        }
    
		}
	
        
   
?>
