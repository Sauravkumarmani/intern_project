
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
    function writeUs(){
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
            <div class="col-lg-10">
               <div class="card">
                   <div class="card-body">
                <table class="table table-striped table-hover table-lg">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Post</th>
                            <th>shortInformation</th>
                            <th>ImportantDate</th>
                            <th>Appliation Fee</th>
                            <th>More Details</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                        $cal ="select * from gyantu_db ORDER BY id DESC";
                        $run =mysqli_query($connect,$cal);
                        while($row = mysqli_fetch_array($run))
                        {
                            $id =$row['id'];
                            $post =$row['post'];
                            $shortInformation = $row['shortInformation'];
                            $importantDate = $row['importantDate'];
                            $applicationFee = $row['applicationFee'];
                            $fileName = $row['fileName'];
                            echo "<tr>
                            <td>$id</td>
                            <td>$post</td>
                            <td>$shortInformation</td>
                            <td>$importantDate</td>
                            <td>$applicationFee</td>
                            <td>$fileName</td>
                            </tr>";
                            }
                        ?>

                    </tbody>
                       </table>
                   </div>
                </div>
    </div>
    </div>
    </div>



<?php
$getFileName = $_GET["fileName"];
$getFileName .= ".php";
//$getFinalFileName = $getFileName +;
//echo $getFileName;
$myfile = fopen($getFileName, "w") or die("Unable to open file!");
$txt = "Detail of job requirement ";
echo  $getFileName;
echo "<a href='$getFileName'>$getFileName</a>";
fwrite($myfile,  $getFileName);
fwrite($myfile, $txt);
$txt = "Detail text and contents \n";
fwrite($myfile, $txt);
fclose($myfile);
?>

</body>
</html>
