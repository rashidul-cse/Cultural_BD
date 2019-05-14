<!DOCTYPE html>

<html>
	<head>
		<title>BD_CULTURE</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/slider.css" rel="stylesheet" type="text/css" />
		<link href="css/page.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<div class="main">
		
			<div class="header">
				<div class="header_text">
					<div id="image">
					<img src="images/banners/banner.jpg" />
				</div>
					<h2>Culture of Bangladesh</h2>
				</div>
				
			</div>
			
			<div id="cpathway">
			<marquee>A brief history of Bangladesh ... </marquee>
			</div>
			
			<div class="container">
				<div id="content_slider">
					<div id="slider">
						<div id="mask">
							
							<ul>
							
								<li id="first" class="firstanimation"><a href="#"><img src="images/slide/s1.jpg" alt="Pohela Baishakh"/></a>
									<div class="tooltip">
										<h1>National Bird</h1>
									</div>
								</li>
								
								<li id="second" class="secondanimation"><a href="#"><img src="images/slide/s2.jpg" alt="Lili Flower"/></a>
									<div class="tooltip">
										<h1>National Flower</h1>
									</div>
								</li>
								
								<li id="third" class="thirdanimation"><a href="#"><img src="images/slide/s3.png" alt="National Memorial"/></a>
									<div class="tooltip">
										<h1>National Memorial</h1>
									</div>
								</li>
								
								<li id="fourth" class="fourthanimation"><a href="#"><img src="images/slide/s4.jpg" alt="Village farmer"/></a>
									<div class="tooltip">
										<h1>Village farmer</h1>
									</div>
								</li>
								
								<li id="fifth" class="fifthanimation"><a href="#"><img src="images/slide/s5.jpg" alt="Traditional Cake"/></a>
									<div class="tooltip">
										<h1>Traditional Cake</h1>
									</div>
								</li>
								
							</ul>
								
						</div>
					</div>
				</div>
			</div>
			
		<div class="menu">	
			<div id="horizontalmenu"> 
				<ul> 
						<li><a href="index.php">Home</a> 
								<ul> 
									 <li><a href="#">About Bangladesh</a></li>
									 <li><a href="aboutCulture.php">About Culture</a></li>
								</ul> 
						</li> 
					 
						<li> <a  href="Culture.php">Cultures</a> 
								<ul>
									<li><a  href="language.php">Language</a></li>
									<li><a  href="dress.php">Dress</a></li>
									<li><a  href="religion.php">Religion</a></li>
									<li><a  href="festival.php">Festival</a></li>
									<li><a  href="literature.php">Literature</a></li>
									<li><a  href="art.php">Art/Music</a></li>
									<li><a  href="cuisine.php">Cuisine</a></li>
									<li><a  href="sports.php">Sports</a></li>
									<li><a  href="architecture.php">Architecture</a></li>
									<li><a  href="symbols.php">Symbols</a></li>
									<li><a  href="media.php">Media</a></li>
									<li><a  href="portal.php">Portal</a></li>
								</ul> 
						</li> 
						
						<li> <a  href="imagegallery.php">Image Gallery</a> 
								<!--<ul> 
									<li><a href="#">Foods</a></li>
									<li><a href="#">Festival</a></li>
									<li><a href="#">Sports</a></li>
									<li><a href="#">Architecture</a></li>
								</ul>-->
						</li> 
						
						<li> <a  href="login/user_log_in.php">Comments</a></li> 
						<li> <a  href="admin/admin_log_in.php">Admin</a></li>
						<li> <a  href="contact.php">Contact</a></li>
						
				</ul>			
			</div> 
			
			<div class="searchbox"> 
						<form action="http://www.google.com/search" target="_blank">
							<input id="in" type="text" name="as_q" placeholder="Search Culture of BD">
                            <input id="ok" type="submit" value="Search" title="search">
						</form>
			</div> 
			
		</div>	
			
			<div class="maincontent">
				<div class="about">
					<h2>Bangladesh:</h2>
					<div id="bd_1"><?php require("php/aboutBDdes.php"); ?> </div>
					<div id="bd_2"><img src="images/pages/map.jpg" title="Map of Bangladesh" /></div>
					<div id="bd_3"><?php require("php/aboutBDdes_2.php"); ?> </div>
					<div id="bd_4"><?php require("php/aboutBDdes_3.php"); ?> </div>
				</div>
			</div>
			
			<div class="cpathway">
				<marquee>Thanks for visiting this site of Bangladesh</marquee>
			</div>
			
			<div class="footer">
			<p>&copy; CSE-500,all rights reserved</p>
			
				<div class="logo">
					<ul>
							<li><a target="_blank" href="https://www.facebook.com/"><img src="images/logo/logo_1.ico" title="Facebook"/></a></li>
							<li><a target="_blank" href="http://www.youtube.com/"><img src="images/logo/logo_2.ico" title="Youtube"/></a></li>
							<li><a target="_blank" href="https://twitter.com/"><img src="images/logo/logo_3.ico" title="Twiter"/></a></li>
							<li><a target="_blank" href="http://en.wikipedia.org/wiki/Culture_of_Bangladesh"><img src="images/logo/logo_4.jpg" title="Wikipedia"/></a></li>
							<li><a target="_blank" href="https://www.instagram.com/"><img src="images/logo/logo_5.ico" title="Instagram"/></a></li>
					</ul>
				</div>
			
			</div>
			
		</div>
	</body>
</html>