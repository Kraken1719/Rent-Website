<?php

include 'config.php';
session_start();
error_reporting(0);



if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);


if ($password == $password) {
    $sql = "SELECT * FROM loginform WHERE email='$email' AND password='$password'"; 
    $result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO loginform (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Congrulates! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
			
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UT F-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent</title>
    <link rel="stylesheet" href="registered.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
    <div class="container ">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                   
                    

                <h1>REGISTER</h1>
                   
                    <form method="POST" action="">
                        <input type="text"  name="username" class="input-box" placeholder="Your Name" value="<?php echo $username; ?>" required> 
                        <input type="email" name="email" class="input-box" placeholder="Your Email Id" value="<?php echo $email; ?>" required>
                        <input type="Password" name="password" class="input-box" placeholder="Password" value="<?php echo $_POST['password']; ?>" required>
                        <button type="submit" name="submit" class="submit-btn">Submit</button>
                        <input type="checkbox"><span>Remember Me</span>
                    </form>
                    <a href="login.php">I've an account</a>
                    <a href="">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
                
<script>
    
    var card = document.getElementById("card");

    function openRegister(){
        card.style.transform = "rotateY(-180deg)";
    }
    function openLogin(){
        card.style.transform = "rotateY(0deg)";
    }
</script>
</body>
</html>