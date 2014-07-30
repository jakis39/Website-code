<?php
	$file = "";
	$title = "";
	$parameters = array_keys($_GET);
	if(count($parameters) > 0){
		$file = $parameters[0];

		switch ($file) {
			case "bosstank":
				$title="Boss Tank";
				break;
			case "skydesign":
				$title="Wi-Fi AHRS";
				break;
			case "myaccountant":
				$title="myAccountant";
				break;
			case "astridgraph":
				$title="Astrid Graph";
				break;
			case "surveyapp":
				$title="Survey App";
				break;
			case "linak":
				$title="Lina Kuliavas";
				break;
			case "touchcatdigital":
				$title="Touch Cat Digital";
				break;
			case "41x":
				$title="41X";
			case "wikibits":
				$title="WikiBits";
				break;
		}
	}
	else{
		header('Location: /#projects');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?> || Jake Nusca</title>
	<?php include("../assets/googlefont.html"); ?>
	<link href="../assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/subpage.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/resp.css" rel="stylesheet" type="text/css" />
	<script src="../assets/javascript/jquery-1.9.1.min.js" type="text/javascript"></script>
</head>

<body>
	<div id="header" class="header">
		<div id="navtop">
			<div class="navwrap">
				<div id="mobile_controls" class="mobile_controls">
					<a href="/#projects" id="back_button" class="back_button icon"><span></span></a>
					<div class="mobile_jakenusca"><?php echo $title; ?></div>
				</div>
				<a href="" id="top_button" class="top_button animate icon unselectable"><span></span></a>
				<div class="clear"></div>
			</div>
		</div>
	</div>

	<div id="main" class="main_content">
		<div>
			<div id="about" class="content_section">
				<div class="content_inner_section">
					<?php 
						if(file_exists("../assets/text/projects/".$file.".html")){
							require("../assets/text/projects/".$file.".html");
						}
						else{
							require("../assets/text/projects/comingsoon.html");
						}
					?>
				</div>
			</div>
		
		</div>
	</div>
</body>
</html>

<script src="../assets/javascript/subpage.js" type="text/javascript"></script>