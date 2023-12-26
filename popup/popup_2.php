<?php

    
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
      <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="550px" width="100%" class="img-thumbnail" />
     </td>
   ';
  }
  $output .= '</table>';
  echo $output;?>
        </div>
     </div>
				
    <script src="js/popup.js"></script>
    
  
  
	?>
