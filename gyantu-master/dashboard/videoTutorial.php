<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">
<link rel='icon' href='../images/favicon.png' type='image/x-icon'/ >
  <title>GyanTU- A free educational portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/screen.css" media="screen">
  <link rel="stylesheet" href="../css/main.css" media="screen">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/dashboard.css" media="screen">

<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
               $(".subject").not("." + optionValue).hide();
                $("." + optionValue).show();
                //$("."+optionvalue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>

<title>untitled document</title>

<link rel="stylesheet" href="css/screen.css" media="screen">

</head>
<body>
  <div>
    <div>
         <a href="https://gyantu.com"><img src="../images/logo.png" style="margin-left:20px;width:100px; height:63px;"></a>
        <div class="" style="float:right;margin-top:20px;">
            <div class="col-sm-2"><a href="#"><span class="glyphicon glyphicon-envelope"></span></a></div>
            <div class="col-sm-2"><a href="#"><span class="glyphicon glyphicon-user"></span></a></div>
        </div>
    </div>
  </div>
  <div class="sidebar">
    <div class="row">
        <div class="col-sm-12">
            <h5><a href="index.php"><span class="glyphicon glyphicon-home"></span>  Home</a></h5>
            <h5><a href="userProfile.php"><span class="glyphicon glyphicon-user"></span>  User Profile</a></h5>
            <h5><a href="videoTutorial.php"><span class="glyphicon glyphicon-film"></span>  Video Tutorials</a></h5>
        </div>
        <div class="col-sm-12">
            <h5><a href="books.php"><span class="glyphicon glyphicon-book"></span>  Books</a></h5>
            <h5><a href="solutions.php"><span class="glyphicon glyphicon-open-file"></span>  Solutions</a></h5>
    </div>   </div>
  </div>

<div class="content">
  <div class="dashbackgroundColor">
   <div class="col-sm-10">
     <div class="container">
        <div class="row"><h2>Video Lesson</h2></div>
        <div class="row">
           <div class="col-lg-6">
              <div class="form-group">
                 <label for="sel1">Select Class</label>
                    <select class="form-control" id="sel1">
                       <option value="6">6</option>
                       <!--<option>2</option>
                       <option>3</option>
                       <option>4</option>-->
                    </select>
              </div>
           </div>

         <div class="col-lg-6">
         <div class="form-group">
               <label for="sel1">Select Subject</label>
                  <select class="form-control" id="sel1">
                     <option value="math">Math</option>
                     <option value="science">Science</option>
                    <!-- <option>2</option>
                     <option>3</option>
                     <option>4</option> -->
                  </select>
            </div>
         </div>

      </div>
      <div class="math subject">Math
      <?php
         $menu=file_get_contents("resources/subject-6-math.txt");
         $base=basename($_SERVER['PHP_SELF']);
         //$menu=preg_replace("|<li><a href=\"".$base."\">(.*)</a></li>|U", "<li id=\"current\">$1</li>", $menu);
         echo $menu;
      ?>
      </div>
      <div class="science subject">Science
      <?php
   $subjectMenu=file_get_contents("resources/subject-6-science.txt");
   $base=basename($_SERVER['PHP_SELF']);
   //$subjectMenu=preg_replace("|<li><a href=\"".$base."\">(.*)</a></li>|U", "<li id=\"current\">$1</li>", $subjectMenu);
   echo $subjectMenu;
?>
      </div>
      

</div>
</body>
</html>