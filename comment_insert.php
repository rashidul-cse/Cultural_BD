<!DOCTYPE HTML> 

<html>
<head>
		<title>Insert User Comments</title>
	<style>
		.error {color: #FF0000;}
		
		body{	width:480px;
				border:2px solid #ccc;
				border-radius:10px;
				background-color:#FEFFED;
				margin-left:300px;
				margin-top:50px;}
			
		#main{	width: 460px;
				margin-bottom: 40px;
				margin-left: 0px;
				background-color: white;
				padding-left: 20px;
				padding-bottom: 0px;}
				
		#names{width : 200px;
				height:25px;
				margin: 20px 0px 0px 27px;
				padding:0px;
		-webkit-box-sizing: border-box; 
		   -moz-box-sizing: border-box; 
			box-sizing: border-box;}
			
		#mails{width : 200px;
				height:25px;
				margin: 0px 0px 0px 24px;
				padding:0px;
		-webkit-box-sizing: border-box; 
		   -moz-box-sizing: border-box; 
			box-sizing: border-box;}
			
		#genders{margin-left:20px;}
		
		a{text-decoration:none;}		
	</style>
	
</head>
	
	
<body> 

	<?php
		$con=mysqli_connect("localhost","root","","Culture_BD");
		
		$nameErr = $emailErr = $genderErr =$error=$corr=$commentErr= "";			// define variables and set to empty values
		$name = $email = $gender = $comment = "";									// define variables and set to empty values

		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
		   if (empty($_POST["name"])||empty($_POST["email"])||empty($_POST["comment"])||empty($_POST["gender"])) 
		    {
			 $nameErr = "Name required";
			 $emailErr = "Email required";
			 $commentErr = "Comment required";
			 $genderErr = "Gender required";
			 $error="Data not inserted";
			} 
		   
		   else 
		    {
			 $name = test_input($_POST["name"]);
			 $email = test_input($_POST["email"]);
			 $comment = test_input($_POST["comment"]);
			 $gender = test_input($_POST["gender"]);
			 $corr="Data inserted successfuly";
			 
			 $sql="INSERT INTO tbl_comment(name,mail_id,comment,gender,Date)
			 VALUES ('$name','$email','$comment','$gender',SYSDATE())";
			 mysqli_query($con,$sql);
			}
		}

		function test_input($data)
		{
		   $data = trim($data);
		   $data = stripslashes($data);
		   $data = htmlspecialchars($data);
		   return $data;
		}
		//echo " ";
	?>
	<?php echo  $corr;?><span />
	<?php echo  $error;?><span />
	
	<div id="main">
		<h2>Comments</h2>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
			Name: 	<input type="text" name="name" id="names" />
					<span class="error">* <?php echo $nameErr;?></span>
					<br /><br />
		   
		    E-mail: <input type="text" name="email" id="mails" />
					<span class="error">*<?php echo $emailErr;?></span>
				    <br /><br />
		   
		    Comment: <textarea name="comment" rows="auto" cols="26" id="Comments" ></textarea>
					<span class="error">*<?php echo $commentErr;?></span>
					<br /><br />
		   
		    Gender:
				    <input id="genders" type="radio" name="gender" value="female " />Female
				    <input type="radio" name="gender" value="male" />Male
				    <span class="error">		*<?php echo $genderErr;?></span>
				    <br /><br />
		   
		            <input type="submit" style='height:30px;width:80px;margin-left:220px;background-color:orange;border:1px;border-radius:3px' name="submit"  value="submit" />  
		</form>
					<a href="http://localhost/project_culture_of_bd/index.php#" /> <input type='submit'  style='height:30px;width:80px;margin-left:300px;background-color:orange;border:1px;border-radius:3px;' value='Log Out' />
	</div>

</body>
</html>