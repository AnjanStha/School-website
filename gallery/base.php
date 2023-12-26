<html>
 <head>
	<title>Dynamic Gallery</title>
	
	<script src="code.jquery.com.js"></script>
	<script src="jquery.fancybox.min.js"></script>
	<link href="jquery.fancybox.min.css" rel="stylesheet"> 
	<style>
	   body{
	   	margin: 0;
	   	padding 0;
	   	background: #ccc;
	   }

	   main{
	   	width: 75%;
	   	margin: 0px auto;
	   }

	   .thumbnails{
	   	width: 30%;
	   	float: left;
	   	margin: 10px;
	   	background: #fff;
	   	padding: 20px;
	   	box-sizing:border-box;
	   }

	   .thumbnails img{
	   	width: 100%;
	   	height: auto;
	   }
	</style>
 </head>

 <body>
 	<main>
 		<h1>Gallery</h1>
 		<?php
 		$dir = glob('../files/{*.jpg,*.png}',GLOB_BRACE);

 		foreach($dir as $value){
 			
 			?>
 			<div class="thumbnails">

 			<a href="<?php echo $value; ?>" data-fancybox="../files" data-caption="<?php echo $value; ?>">
	        <img src="<?php echo $value; ?>" alt="<?php echo $value; ?>" >  
            </a>
 			</div>

 			<?php

 		}

 		?>
 	</main>
 </body>
</html>

