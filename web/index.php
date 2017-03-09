<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>portfolio Website Template | Home :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
		</script>
	</head>
	<body>
		<!---start-wrap--->
		<!---start-header--->
	<div class="header">
		<div class="wrap">
			<!---start-logo--->
			<div class="logo">
				<a href="#">naga demon</a>
			</div>
			<!---End-logo--->
			<!---start-top-nav--->
			<div class="top-nav">
				<ul>
					<li class="active"><a href="#me" class="scroll">Me</a></li>
					<li><a href="#skills" class="scroll">Skills</a></li>
					<li><a href="#works" class="scroll">Work</a></li>
					<li><a href="#contact" class="scroll">Contact</a></li>
				</ul>
			</div>
			<div class="clear"> </div>
			<!---End-top-nav--->
	     </div>
	</div>
		<!---End-wrap--->
	<div class="content">
		<div class="grid1" id="me">
			<a href="#"><img src="images/face.gif" title="name" /></a>
			<h3>Hi, I'm Nguyễn Huy Hoàng</h3>
			<p>They say when you are missing someone that they are probably feeling the same, but I don't think it's possible for you to miss me as much as I'm missing you right now.</p>
		</div>
		<div class="grid2" id="skills">
			<h3>Skill</h3>
			<ul>
				<li>
					<img src="images/programmer.jpg" title="Artdirector" />
					<a href="#">Program</a>
				</li>
				<li>
					<img src="images/images.jpg" title="Artdirector" />
					<a href="#">Auto</a>
				</li>
				<li>
					<img src="images/freeline.jpg" title="Artdirector" />
					<a href="#">Freeline skate</a>
				</li>
				<li>
					<img src="images/basketball.jpg" title="Artdirector" />
					<a href="#">Basket ball</a>
				</li>
			</ul>
		</div>
		<div class="grid3">
			<div class="grid3-header" id="works">
				<h3>Project Name</h3>
			</div>
			<div class="grid3-content">
				<div class="grid3-left">
					<h3>Chuyên đề công nghệ</h3>
					<ul>
						<li><a href="tech_week1.html" target="_blank"><img src="images/Places-folder-black-icon.png" title="TechWeek1" /></a></li>
						<li><a href="tech_week2.xhtml" target="_blank"><img src="images/Places-folder-black-icon.png" title="TechWeek2" /></a></li>
						<li><a href="https://github.com/14020190/nodejs-express-mongodb" target="_blank"><img src="images/Places-folder-black-icon.png" title="Icon-Name" /></a></li>
						<li><a href="#"><img src="images/Places-folder-black-icon.png" title="Icon-Name" /></a></li>
					</ul>
					<a class="button" href="#">View Project</a>
				</div>
				<div class="grid3-right">
					<a href="#"><img src="images/eva.jpg" title="project-name" /></a>
				</div>
				<div class="clear"> </div>
			</div>
		</div>	
		<div class="twiiter-box">
			<p>abc</p>
		</div>
		<div class="contact" id="contact">
			<h3>Feed Back</h3>
			<form>
			<input type="text" class="textbox" value="Name:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
			<input type="text" class="textbox" value="Email:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
			<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
			<input type="submit" value="Send">
			</form>
		</div>
		<div class="catch-me">
			<h3>SAY HELLO</h3>
			<ul>
				<li><a href="#"><img src="images/facebook.png" title="facebook" /></a></li>
				<li><a href="#"><img src="images/rss.png" title="Rss" /></a></li>
				<li><a href="#"><img src="images/googlepluse.png" title="Googlepluse" /></a></li>
			</ul>
		</div>
		<div class="footer">
			<p>Thank you</p>
		</div>
	</div>
	</body>
</html>

