<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WYSIWYG || Jake Nusca</title>
	<?php include("../assets/googlefont.html"); ?>
	<link href="../assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/subpage.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/resp.css" rel="stylesheet" type="text/css" />
	<link href="wysiwyg.css" rel="stylesheet" type="text/css" />
	<script src="../assets/javascript/jquery-1.9.1.min.js" type="text/javascript"></script>
</head>

<body>
	<div id="header" class="header">
		<div id="navtop">
			<div class="navwrap">
				<div id="mobile_controls" class="mobile_controls">
					<a href="/" id="back_button" class="back_button icon"><span></span></a>
					<div class="mobile_jakenusca">WYSIWYG</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>

	<div id="main" class="main_content">
		<div>
			<div id="about" class="content_section">
				<div class="content_inner_section">
					<div class="postBox" id="BossTank">
						<div class="innerPostBox">
							<div class="postTitle">WYSIWYG Content Editor</div>
							<form id="wysiwyg_form" method="POST">
							    <input type="hidden" id="is_publish" name="is_publish" value="true"/>
							    <input type="hidden" id="inner_content" name="inner_content"/>
							    <?php
							        include('wysiwyg_editor.php');
							    ?>
							    <!-- <input type="submit" class="button blue_button float_right" value="Publish" <?php if(!$CAN_PUBLISH){echo('tbremove');}?>/>
							    <a href="javascript:void(0);" class="button blue_button float_right" onclick="updateDraft();">Save Draft</a>
							    <a href="javascript:void(0);" class="button grey_button float_right" onclick="showDialog('dialog','~/administration/pages/edit/content_editor/_cancel.php');">Cancel</a> -->
							</form>
								<div class="postBody" style="margin-top:2em;">This is a WYSIWYG text editor I made over the summer while working at Touch Cat Digital. It uses the execCommand function to accomplish most of it's functionality. It was used as a content editor for the administration panel in Touch Cat Digital's framework. Personally I used it to create the content on a few of the websites that I worked on during my co-op term.<br /><br />I have included the plugin below to demonstrate it's functionality, with the image uploading functionality removed. When included in a form, the HTML content in the editor can be pulled out and saved somewhere for later use.<br /><br />The code is on my <a href="https://github.com/jakis39">Github</a> now in case anyone wants to peruse it or use it for something.</div>
						</div>
					</div>
				</div>
			</div>
		
		</div>
	</div>
</body>
</html>

<script src="../assets/javascript/functions.js" type="text/javascript"></script>
<script src="../assets/javascript/subpage.js" type="text/javascript"></script>
<script src="wysiwyg.js" type="text/javascript"></script>