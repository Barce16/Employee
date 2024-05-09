<?php 
session_start(); 
include "./config/database.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: /Employee/login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: /Employee/login.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM employee WHERE Gmail='$uname' AND Password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Gmail'] === $uname && $row['Password'] === $pass) {
            	$_SESSION['Gmail'] = $row['Gmail'];
            	$_SESSION['Complete_Name'] = $row['Complete_Name'];
            	
            	header("Location: /Employee/profile.php");
		        exit();
            }else{
				header("Location: /Employee/login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
            header("Location: /Employee/login.php?error=Incorrect User name or password");
            exit();
        }
		
	}
	
}else{
    header("Location: /Employee/login.php?error=Incorect User name or password");

	header("Location: /Employee/login.php");

	exit();
}