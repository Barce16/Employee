<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>

    
    <div class="wrapper">
   

        <form action="./profile.php" method="POST" autocomplete="off">
            <h1>LOG IN</h1>
            <div class="form">
                <br>
                <label for="Gmail">Your Gmail Account : </label>
                <input type="email" placeholder="Ex.Employee@gmail.com" id="Gmail" name="Gmail" autocomplete="off" required>
                <br>
                <br>
                <label for="Password">Your password :</label>
                <input type="password" placeholder="Password" id="Password" name="Password" autocomplete="off" required>
                
                <br>
            </div>
            <div class="remember-forgot">
                <label> <input type="checkbox"> Remember me</label>
                <a href="#">Forgot Password?</a>
                <br>
                <br>
            </div>
            <button type="submit" class="btn">LOG IN</button>
            
            <br>
            <br>
            <div class="register_link">
                <p>Don't have an account? <a href="./registration.php" >Register</a></p>

                
            </form>
            </div>
</body>

    
</html>

