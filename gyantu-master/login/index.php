<?php
include '../connection/server.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel='icon' href='../images/favicon.png' type='image/x-icon'/>
	<link rel="stylesheet" type="text/css" href="forget-password/style.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
<?php
    if(isset($_POST['submit'])){
    if(isset($_POST["email"], $_POST["pass"])) 
    {     

        $email = $_POST["email"]; 
        $pass = $_POST["pass"]; 
        $sqlQ = "SELECT * FROM students WHERE email = '".$email."' AND  pass = '".$pass."'";
        $result1 = mysqli_query($conn, $sqlQ);
       // $result1 = mysqli_query("SELECT * FROM students WHERE email = '".$name."' AND  pass = '".$password."'");

        if(mysqli_num_rows($result1) > 0 )
        { 
			header('LOCATION:../dashboard');
            //echo 'logged in';
            //$_SESSION["login"] = true; 
           // $_SESSION["naam"] = $name; 
        //header('LOCATION:admin.php'); 
            
        }
        else
        {
			echo 'logged wrong';
			//header('LOCATION:../dashboard/index.php');
            //echo 'The username or password are incorrect!';
        }
	}
		}
?>
		<div class="login-content">
			<form action="" method="POST">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>E-Mail</h5>
           		   		<input type="text" id="email" class="input" name="email">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" id="pass" class="input" name="pass">
            	   </div>
            	</div>
            	<a href="../login/forget-password">Forgot Password?</a>
            	<input type="submit" name="submit" class="btn">
				<p>New User<a class="para" href="../register">Register</a></p>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="forget-password/main.js"></script>
</body>
</html>