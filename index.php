<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['Gmail'])) {
    header("Location: profile.php");
    exit();
}
?>                              

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label><b>Email</b></label>
     	<input type="email" name="uname" placeholder="Email Address"><br>

     	<label><b>Password</b></label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="registration.php" class="ca"><b>Create an account</b></a>
     </form>
</body>
<!-- jquery -->
<script src="./assets/js/jquery.js"></script>
<!-- jquery -->
</html>
