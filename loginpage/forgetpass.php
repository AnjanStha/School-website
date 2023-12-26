<html>
<head>
	<link rel="stylesheet" type="text/css" href="forgetcss/forget.css">
</head>
<body>
	<div class="mail">
<form method="post" action="forget.php">
	<h2>Forget password</h2>
<p>E-mail</p>
       <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
	   size="30" title="Enter a valid email address" placeholder="Enter admin email address" required>
	<p><input type="submit" value="submit" name="submit"></p>
</form>
	</div>
</body>
</html>