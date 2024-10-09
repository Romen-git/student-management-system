<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html>
<head>
<title>Student  Management System || Contact Us Page</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

<link href="css/style.css" rel="stylesheet" type="text/css"/>


<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>
	<body>

		<?php include_once('includes/header.php');?>

<div class="banner banner5">
	<div class="container">
	<h2>Contact</h2>
	</div>
</div>

		<div class="contact">
			<!-- container -->
			<div class="container">
				<div class="contact-info">
					<h3 class="c-text">Feel Free to contact with us!!!</h3>
				</div>
				
				<div class="contact-grids">
					<?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
					<div class="col-md-4 contact-grid-left">
						<h3>Address :</h3>
						<p><?php  echo htmlentities($row->PageDescription);?>
						</p>
					</div>
					<div class="col-md-4 contact-grid-middle">
						<h3>Phones :</h3>
						<p><?php  echo htmlentities($row->MobileNumber);?>
						</p>
					</div>
					<div class="col-md-4 contact-grid-right">
						<h3>E-mail :</h3>
						<p><?php  echo htmlentities($row->Email);?>
						</p>
					</div>
					<div class="clearfix"> </div>
					<?php $cnt=$cnt+1;}} ?>
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
