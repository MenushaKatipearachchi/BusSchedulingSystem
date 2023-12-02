<?php 
session_start(); 
include "dbconfig.php";

if (isset($_POST['uname']) && isset($_POST['pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['uname']);
	$password = validate($_POST['pass']);

	if (empty($username)) {
		header("Location: adminlog.php?error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: adminlog.php?error=Password is required");
	    exit();
	}else{    
		$query = "SELECT * FROM register WHERE username='$username' AND password='$password'";

		$result = mysqli_query($connection, $query);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['id'] = $row['id'];
            	
            	header("Location: ./travel/index.php");
		        exit();
            }else{
				header("Location: adminlog.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: adminlog.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: adminlog.php");
	exit();
}
?>