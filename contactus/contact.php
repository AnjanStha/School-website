<html>
<head>
	<link rel="stylesheet" type="text/css" href="contact.css">
	
	
</head>
<body>
   
	        
 



	<div class="contact">
		<h2>Contact us</h2>
<form method="post" action="contactus.php">
       <p>Full name</p>
         <input type="text" name="Name" pattern="[A-Za-z].{3,}" title="Enter more than 3 character" placeholder="Enter your full name" required>
<p>E-mail</p>
       <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
	   size="30" title="Enter a valid email address" placeholder="Enter email address" required>
	
	<p>Subject</p>
<input type="text" name="mail_sub" placeholder="Enter subject" required>
	
<p>Message</p>
	<div class="message">
		<textarea rows="30" cols="50" type="text" name="mail_msg" placeholder="Enter the message"  required></textarea>
	<p><input type="submit" value="submit"  name="submit"></p>
	</div>
</form>
	</div>
</body>
</html>