<?php
    session_start();
    $message="";
   
$servername="localhost";
$user="root";
$pass="";
$database="discussion";
$link=mysqli_connect($servername,$user,$pass,$database);



$email=$_POST["email"];
$password=$_POST["password"];

     
		$qry="SELECT * FROM admin_login WHERE email='$email' and password='$password'";
		
        $result = mysqli_query($link,$qry);
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
       $_SESSION["username"] = $row['username'];
		$_SESSION["email"] = $row['email'];
        $_SESSION["password"] = $row['password'];
		if(null!==$_SESSION["email"] AND $_SESSION["password"]) {
  header("Location:../admin.php");
    }
		}
	
        else { echo "invalid";
        
        }
    
   
?>
