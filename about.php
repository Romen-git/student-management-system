<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html>
<head>
<title>Student  Management System || About Us Page</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

<link href="css/style.css" rel="stylesheet" type="text/css"/>


<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>


</head>
	<body>

<?php include_once('includes/header.php');?>

<div class="banner banner5">
	<div class="container">
	<h2>About</h2>
	</div>
</div>

<div class="about">
	 <div class="container">
		 <div class="about-info-grids">
			 <div class="col-md-5 abt-pic">
				 <img src="images/abt.jpg" class="img-responsive" alt=""/>
			 </div>
			 <div class="col-md-7 abt-info-pic">
			 	<?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
				 
				 <p><?php  echo ($row->PageDescription);?></p><?php $cnt=$cnt+1;}} ?>
				
			 </div>
			 <div class="clearfix"> </div>
		 </div>
		
	 </div>
</div>

<?php include_once('includes/footer.php');?>

<script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.js"></script>
    
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
	<script src="js/script2.js"></script>
	</body>
</html>
