<!DOCTYPE html>

<html>
	<head>
		<title>User Registration Form </title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<div id="main">
			<h1 style="margin-left:215px;">Registration Form</h1>
			<div id="login">
				<form action="user_registration_php_file.php"  method="POST">
				
					Email: <input type="text" name="email" /> <br />
					Password: <input type="password" name="pass" /> <br /> <br/>
					
					<input type="submit" value="Register" name="submit"/></br>
			
				</form>
					  <a href="user_log_in.php"><input type="submit" value="Log In" /></a>
				
				</br>
				<a href="http://localhost/project_culture_of_bd/index.php#"><input type="submit" value="Home Page" /></a>
					  
			</div>
		</div>
	</body>
</html>