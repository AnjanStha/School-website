<html>
<head>
       <title>Kathmandu</title>
       <link rel="stylesheet" type="text/css" href="css/style.css">
       <link rel="stylesheet" href="css/footer.css">
       <link rel="stylesheet" href="css/social.css">
	   <link rel="stylesheet" type="text/css" href="css/head.css">
	     <link rel="stylesheet" href="css/div.css">
	    <link rel="shortcut icon" href="../favicon.ico"> 
		
		

       
        <link rel="stylesheet" type="text/css" href="css/slide.css" />


       <meta name="viewport" content="width=device-width, intital-scale=1.0">


         

       <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet"> <!--for google font flamenco-->  
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--to use bar-->
</head>
<body>
       <?php
	         include 'social.php';
	         include 'image_slide.php';
	         include 'header1.php';
			
			 
	   
	   ?>


    <div id="id0" class="bg-popup">
	    <div class="popup-content">
	    	<div class="close">+</div>
		
	        <div class="heading"><h1>Welcome to Kathmandu School</h1></div>
				<?php
			 $connect = mysqli_connect("localhost", "root", "", "srms");
             $query = "SELECT * FROM tbl_images ORDER BY id DESC";
             $result = mysqli_query($connect, $query);
              $output = '
                 <table class="table table-bordered table-striped">  
                      <tr>
                   
            
      
                      </tr>
               ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
     
     <td>
      <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="550px" width="100%" class="img/thumbnail" />
     </td>
   ';
  }
  $output .= '</table>';
  echo $output;?>
        </div>
     </div>
				
    <script src="js/popup.js"></script>
   
	 



	  <!--for body part--->
	  <div class="container">
	  <div class="box1"> </div>
      
	  <div class="box3"><center><H2 > A MESSAGE FROM PRINCIPAL  </center><img src="image/p.jpg"></H2><br><br>
    

	  	<p>
	  Dear Students and Parents/Guardians of Kathmandu School,</p>

	  	<p>On behalf of the Kathamandu School, I warmly welcome you to our school. Kathmandu School is an exceptional learning community in which all students are nurtured to achieve and exceed their potential within a caring Catholic environment.</p><p>

Our school has an outstanding reputation for establishing high expectations and achieving excellent academic results.  We provide quality education through an excellence in learning and teaching along with a strong focus on wellbeing.  Our staff are passionate about developing the academic, social, physical and spiritual whole of the young people in our care.</p><p>

 

In my role, I work with staff and parents to engage each child in their own learning, creating an environment in which teaching and learning is purposeful, relevant, innovative and collaborative.  At St Ignatius we will always hold the highest expectation for children in attaining their academic best and developing the whole child.</p><p>

We enjoy wonderful facilities, including air-conditioned contemporary classrooms, the Manresa Enrichment centre and Library, Mercy Hall along with the magnificent Susan Palmer Field that has possibly the best playground view of the city in Kathmandu. 

Our students are the life-blood of our school as they 'Lift up their hearts' with their peers and community members.

Please enjoy exploring our website. You will find much information about our wonderful school here. However, I invite you to come and take a personal tour of Kathmandu School to experience what our community has to offer.
</p>
<br>
Sincerely;
<p>Mr. Khan</p>
<p>The Principal</p>

 </div>
	</div>
    
	  


	  <?php
	       include 'footer.php';

	    ?>

		<script src="js/respons.js"></script>
		<script src="js/head.js"></script>

</body>
</html>