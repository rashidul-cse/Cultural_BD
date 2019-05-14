<!DOCTYPE html>

<html>
	<head>
		<title>Login form for user</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>

<body>
	<div id="main">
		<h1 style="margin-left:255px">Log in form</h1>
		<div id="login">
	
			<form action="user_log_in_php_file.php" method="POST">
				Email: <input type="text" name="email" /> <br />
				Password: <input type="password" name="pass" /> <br /> <br/>
				<input type="submit" value="Log in" name="submit"/> </br>
			</form>
			
			<a href="user_registration.php"><input type="submit" value="Register" /></a> <br />
			
			<a href="http://localhost/project_culture_of_bd/index.php#"><input type="submit" value="Home Page" /></a>
			
		</div>
	</div>
</body>
</html>