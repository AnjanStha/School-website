<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
    else{
        ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>School Result Management System | Dashboard</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css" />
        <link rel="stylesheet" href="css2/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css2/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css2/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css2/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css2/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="css2/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="css2/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="css2/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="css2/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body  class="top-navbar-fixed">
        <div class="main-wrapper">
		
              <?php include('includes/topbar1.php');?>
            <div class="content-wrapper">
                <div class="content-container">

                    <?php include('includes/leftbar1.php');?>  

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-12">
                                    
                               
                              <html>
<body>

  
<?php
$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "srms";
	
SESSION_START();

$email=$_SESSION['alogin'];
    //create connection
    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
$sql="SELECT * from tblstudents where StudentEmail='$email'";
$result = mysqli_query($conn,$sql);
		
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_assoc($result)){
					//print_r($row);
$studentname=$row['StudentName'];
$roll=$row['RollId'];
$gender=$row['Gender'];
$email=$row['StudentEmail'];
$DOB=$row['DOB'];
$class=$row['ClassId'];
}}
?>
		
	
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 350px;
  margin: auto;
  text-align: left;
	padding: 10px;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}



	.imgg{
		height: 290px;
		margin-left: 30px;
		width: auto;
		border-radius: 50%;
		align-content: center;
	}
	
button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">About me</h2>

<div class="card">
	<div class="img">
  <img class="imgg" src="putra.png" alt="student name" >
	</div>
  <h2>Name:<?php echo $studentname; ?> </h2>
  <p class="title">Roll id:<?php echo $roll; ?></p>
	<p class="title">Email id:<?php echo $email; ?></p>
	<p class="title">Gender:<?php echo $gender; ?></p>
	<p class="title">Class:<?php echo $class; ?></p>
	<p class="title">DOB:<?php echo $DOB; ?></p>
  
</div>    
       
        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/waypoint/waypoints.min.js"></script>
        <script src="js/counterUp/jquery.counterup.min.js"></script>
        <script src="js/amcharts/amcharts.js"></script>
        <script src="js/amcharts/serial.js"></script>
        <script src="js/amcharts/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="js/amcharts/plugins/export/export.css" type="text/css" media="all" />
        <script src="js/amcharts/themes/light.js"></script>
        <script src="js/toastr/toastr.min.js"></script>
        <script src="js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script src="js/production-chart.js"></script>
        <script src="js/traffic-chart.js"></script>
        <script src="js/task-list.js"></script>
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
                toastr["success"]( "Welcome to User Dashboard!");

            });
        </script>
    </body>
</html>
<?php } ?>
