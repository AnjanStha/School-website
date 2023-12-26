<?php
session_start();
error_reporting(0);
include('includes/config.php');?><!DOCTYPE html><!DOCTYPE html>
<html lang="en">
    <head>
	       <title>Kathmandu School</title>
           <meta charset="UTF-8" />
           <link rel="stylesheet" type="text/css" href="styles/style.css" />
           <!--[if IE 6]><link rel="stylesheet" type="text/css" href="styles/ie6.css" /><![endif]-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Result Search</title>	  
		<link rel="stylesheet"  href="css/head.css">
		 
		
        <link rel="stylesheet" href="css2/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css2/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css2/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css2/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css2/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
		
		
    </head>
	<body>
<?php include 'header1.php';

 ?>
 
   
        <div class="main-wrapper">

            <div class="">
 <h1 align="center"><font color="red">School Result Management System</font></h1>
 <br>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel login-box">
                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    <h4>Kathmandu School</h4>
                                </div>
                            </div>
                            <div class="panel-body p-30">

                             
                                	
                               <div class="form-group">
                                                        <label for="default" class="col-sm-4 control-label">Exam Type</label>

   <select name="career" id="career" onchange="location = this.value;">
   <option value="resume" selected>Select Exam Type </option>
  <option value="find-result.php">Final Term</option>
  <option value="find-result1.php">Mid Term</option>
  <option value="find-result2.php">Unit Test</option>
</select>
										
	  
</div>                                                
    
                                    <div class="form-group mt-30">
                                        <div class="">
                                      
                                            

                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                       <div class="col-sm-6">
                                                               <a href="index.php">Back to Home</a>
                                                            </div>
                                </form>

                                <hr>

                            </div>
                        </div>
                        <!-- /.panel -->
                        
                    </div>
                    <!-- /.col-md-6 col-md-offset-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){
                $('input.flat-blue-style').iCheck({
                    checkboxClass: 'icheckbox_flat-blue'
                });
            });
        </script>

 

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
