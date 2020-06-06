<?php
include '../connection/server.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
  <link rel='icon' href='../images/favicon.png' type='image/x-icon'/>
	<link rel="stylesheet" type="text/css" href="style.css">
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
		<div class="login-content">
			<form action="" method="POST">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Name</h5>
           		   		<input type="text" id="name" class="input" name="name">
				   </div>
				</div>
           		<div class="input-div one">
           		   <div class="i">
					  <i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>E-Mail</h5>
           		   		<input type="text" id="email" class="input" name="email" value ="<?php echo $_POST['email'];?>">
           		   </div>
				</div>
				<div class="input-div one">
           		   <div class="i">
					  <i class="fas fa-mobile"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Phone</h5>
           		   		<input type="text" id="phone" class="input" name="phone">
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
				<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Repeat Password</h5>
           		    	<input type="password" id="rep_pass" class="input" name="rep_pass">
            	   </div>
            	</div>
            	<p>Already Member<a href="../login">Sign In</a></p>
            	<input type="submit" name="submit" class="btn">
            </form>
        </div>
    </div>
	<?php
		if (isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['phone'])&&isset($_POST['pass'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mob = $_POST['phone'];
		$pass = $_POST['pass'];

    	$sql = "INSERT INTO students (name, mob, email, pass)
			VALUES ('$name', '$mob', '$email', '$pass')";

	if (mysqli_query($conn, $sql)) {
    	echo "";
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

		mysqli_close($conn);}
	?>	
    <script type="text/javascript" src="main.js"></script>
</body>
</html>