<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jake Nusca</title>
	<?php include("assets/googlefont.html"); ?>
	<link href="assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/resp.css" rel="stylesheet" type="text/css" />
	<script src="assets/javascript/jquery-1.9.1.min.js" type="text/javascript"></script>
</head>

<body>
	<!-- <div id="headerwrapper_back" class="headerwrapper_gradient hide"></div> -->
	<div id="headerwrapper" class="headerwrapper hide">
		<div id="header" class="header">
			<div unselectable="on" class="jakenusca unselectable">
				Jake Nusca
				<div class="theme_tag">new (beta) theme</div>
			</div>
			<div class="mobile_welcome">
				<div class="finger icon"></div>
				<div class="welcome_text">Welcome, click here to get started</div>
			</div>
			<div id="navtop">
				<div  class="navwrap">
					<div id="mobile_controls" class="mobile_controls">
						<a href="javascript:void(0)" id="menu_button" class="menu_button icon"><span></span></a>
						<div class="mobile_jakenusca">Jake Nusca</div>
					</div>
					<div id="nav" class="navbar">
						<nav>
							<ul>
								<li><a id="nav_about" class="navlink unselectable animate" href="#about">About</a></li>
								<li><a id="nav_blog" class="navlink unselectable animate" href="#blog">Blog</a></li>
								<li><a id="nav_projects" class="navlink unselectable animate" href="#projects">Projects</a></li>
								<li><a id="nav_resume" class="navlink unselectable animate" href="#resume">Resume</a></li>
								<li><a id="nav_contact" class="navlink unselectable animate" href="#contact">Contact</a></li>
							</ul>
						</nav>
					</div>
					<a href="#header" id="top_button" class="top_button animate icon unselectable"><span></span></a>
					<a id="header_color_button" class="header_color_button header_color_button_background" href="javascript:switchTheme();"></a>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<div id="main" class="main_content">
		<div>
			<div id="devicewidth"></div>
			<div id="about" class="about_section content_section animate"><div class="content_inner_section"><?php require("about_section.php"); ?></div></div>
			<div id="blog" class="blog_section content_section animate"><div class="content_inner_section"><?php require("blog_section.php"); ?></div></div>
			<div id="projects" class="project_section content_section animate"><div class="content_inner_section"><?php require("projects_section.php"); ?></div></div>
			<div id="resume" class="resume_section content_section animate"><div class="content_inner_section"><?php require("resume_section.php"); ?></div></div>
			<div id="contact" class="contact_section content_section animate"><div class="content_inner_section"><?php require("contact_section.php"); ?></div></div>
		</div>
	</div>
</body>
</html>

<script src="assets/javascript/functions.js" type="text/javascript"></script>
<script src="assets/javascript/site.js" type="text/javascript"></script>