 <?php
$connect=mysqli_connect('localhost','u181658000_git_pc_pro','A@56gh-$mM85@');
$db=mysqli_select_db($connect,'u181658000_gyantu_project');
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>GyanTU-Jobs</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='icon' href='../images/favicon.png' type='image/x-icon' />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/main.css" media="screen">
</head>
<script>
	function writeUs() {
		alert("Please share your profile on careers@gyantu.com");
	}

</script>

<body class="">
	<nav class="navbar navbar-expand-lg navbar-dark bg-light mb-0 pb-0">
		<a href="https://gyantu.com"><img src="../images/logo.png" style="width:168px; height:90px;" class="mt-4 ml-4 "></a>
	</nav>

	<div class="jumbotron bg-primary m-0  rounded-0 text-light">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-6">
				<h1>Sarkari Result</h1>
				<h2>Information about Govntment Job</h2>
				<h3>All the best</h3>
			</div>

			<div class="col-lg-4">
				<img class="w-75" src="../images/gyantu_page.png"></div>

		</div>
	</div>
	<div class="container-fluid mt-5 mb-5">
		<div class="row">
			<div class="col-lg-4 m-auto">
				<div class="card border-0">
				<div class="card-body">
				<form action="default.php" method="post" onsubmit="">

							<div class="form-group">
							<label class="text-primary">Post</label>
								<input type="text" class="form-control" name="post" placeholder="Post">
							</div>
							<div class="form-group">
							<label class="text-primary">Short Information</label>
								<input type="texts" class="form-control" name="shortInformation" placeholder="Short Information">
							</div>
							<div class="form-group">
							<label class="text-primary">Important Dates</label>
								<input type="text" class="form-control" name="importantDate" placeholder="Important Dates">
							</div>
							<div class="form-group">
							<label class="text-primary">Application Fee</label>
								<input type="texts" class="form-control" name="applicationFee" placeholder="Application Fee">
							</div>
							<div class="form-group">
							<label class="text-primary">File Name</label>
								<input type="texts" class="form-control" name="fileName" placeholder="File Name">
							</div>
							<button type="submit" class="btn btn-block btn-primary text-white" name="submit">Submit</button>

				</form>
					</div></div></div>
			</div>
		</div>
	<?php
                   if(isset($_POST['submit'])){
                        $post=$_POST['post'];
                        $shortInformation=$_POST['shortInformation'];
                        $importantDate=$_POST['importantDate'];
                        $applicationFee=$_POST['applicationFee'];
                        $fileName=$_POST['fileName'];
                       $query="insert into gyantu_db(post,shortInformation,importantDate,applicationFee,fileName) value('$post','$shortInformation','$importantDate','$applicationFee','$fileName')";
                       $run=mysqli_query(database connection,$query);
                       if($run){
                       echo "success";
                       echo "<script>window.open('default.php','_self')</script>";
                }
                else{
                echo "fail";
                }
                   }
                    ?>

</body>

</html>
