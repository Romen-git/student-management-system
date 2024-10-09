<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html>

<head>
    <title>Student Management System || Home Page</title>


    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

    <link href="css/style.css" rel="stylesheet" type="text/css" />





    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />





</head>

<body>
    <?php include_once('includes/header.php'); ?>
    <div class="banner">
        <div class="container">


            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider">
                        <li>
                            <h3>Student Management System</h3>
                            <p>Registered Students can Login Here</p>
                            <div class="readmore">
                                <a href="user/login.php">Student Login<i class="glyphicon glyphicon-menu-right"> </i></a>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="welcome">
        <div class="container">
            <?php
            $sql = "SELECT * from tblpage where PageType='aboutus'";
            $query = $dbh->prepare($sql);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);

            $cnt = 1;
            if ($query->rowCount() > 0) {
                foreach ($results as $row) {               ?>
                    <h2><?php echo htmlentities($row->PageTitle); ?></h2>
                    <p><?php echo ($row->PageDescription); ?></p><?php $cnt = $cnt + 1;
                                                                }
                                                            } ?>
        </div>
    </div>




    <div class="testimonials">
        <div class="container">
            <div class="testimonial-nfo">
                <h3>Public Notices</h3>
                <marquee style="height:350px;" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
                    <?php
                    $sql = "SELECT * from tblpublicnotice";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                    $cnt = 1;
                    if ($query->rowCount() > 0) {
                        foreach ($results as $row) {               ?>


                            <a href="view-public-notice.php?viewid=<?php echo htmlentities($row->ID); ?>" target="_blank" style="color:#fff;">
                                <?php echo htmlentities($row->NoticeTitle); ?>(<?php echo htmlentities($row->CreationDate); ?>)</a>
                            <hr /><br />

                    <?php $cnt = $cnt + 1;
                        }
                    } ?>
                </marquee>
            </div>
        </div>
    </div>



    <?php include_once('includes/footer.php'); ?>

    <script src="js/script1.js"></script>
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/script2.js"></script>
    <script src="js/responsiveslides.js"></script>
    <script src="js/script3.js"></script>
</body>

</html>