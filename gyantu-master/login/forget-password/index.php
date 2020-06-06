<?php
include '../../connection/server.php';
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
    <link rel='icon' href='../images/favicon.png' type='image/x-icon'/>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }
 


</style>
</head>
<body>
    <img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="" method="POST">
				<img src="img/avatar.svg">
				<h2 class="tsize">Please Enter Your E-mail<br></h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>E-Mail</h5>
           		   		<input type="text" id="email" class="input" name="email">
           		   </div>
           		</div>
           		
            	<input type="submit" name="submit" value="SUBMIT" class="btn">
            	<p><a class="pa-log" href="../../login">Login</a></p>
				<p><a class="para" style="font-size:18px" href="../../register">Register</a></p>
            </form>
        </div>
		<?php 
		if(isset($_POST['submit']))
		{
			$email = $_POST['email'];
			$result = mysqli_query($conn,"SELECT * FROM students where email='" . $_POST['email'] . "'");
    			$row = mysqli_fetch_assoc($result);
				$fetch_email=$row['email'];
				$password=$row['pass'];
			if($email==$fetch_email) {
						$to = $email;
						$subject = "Password for Gyantu Account";
						$txt = "\n Your password is : $password.";
						$headers = "From: profile@gyantu.com" . "\r\n";
						mail($to,$subject,$txt,$headers);
						echo 'Your password is sent to your mail';
					}
						else{
							echo 'You are not registered with us. Please create your account.';
						}
		}
		?>
    </div>
<script type="text/javascript" src="main.js"></script>
</body>
</html>