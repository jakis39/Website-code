<?php
require_once('../connections/JakeSQL.php');

mysql_select_db($database_JakeSiteServer, $JakeSiteServer);
$query_getBlogPosts = "SELECT PostID, Title, Date, Author, Body, Category, Tags FROM BlogPosts ORDER BY PostID DESC";
$getBlogPosts = mysql_query($query_getBlogPosts, $JakeSiteServer) or die(mysql_error());
$totalRows_getBlogPosts = mysql_num_rows($getBlogPosts);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog || Jake Nusca</title>
	<?php include("../assets/googlefont.html"); ?>
	<link href="../assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/subpage.css" rel="stylesheet" type="text/css" />
	<link href="page.css" rel="stylesheet" type="text/css" />
	<script src="../assets/javascript/jquery-1.9.1.min.js" type="text/javascript"></script>
</head>

<body>
	<div id="header" class="header">
		<div id="navtop">
			<div class="navwrap">
				<div id="mobile_controls" class="mobile_controls">
					<a href="/#blog" id="back_button" class="back_button icon"><span></span></a>
					<div class="mobile_jakenusca">Blog</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>

	<div id="main" class="main_content">
		<div>
			<div id="blogz" class="content_section">
				<div class="content_inner_section">
					<?php
						$remaining_rows = $totalRows_getBlogPosts;
						while($remaining_rows > 0)
						{
							//echo '<div class="section group">';
							for($i=0;$i<3;$i++)
							{
								echo '<div class="grid_1_of_3">';
								if($remaining_rows > 0)
								{
									$row_getBlogPosts = mysql_fetch_assoc($getBlogPosts);
									include("../getposts.php");
									$remaining_rows--;
								}
								echo '</div>';
							}
							//echo '</div>';
						}
					?>
			</div>
		
		</div>
	</div>
</body>
</html>

<script src="../assets/javascript/functions.js" type="text/javascript"></script>
<script src="../assets/javascript/subpage.js" type="text/javascript"></script>
<script src="page.js" type="text/javascript"></script>