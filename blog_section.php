<?php
require_once('connections/JakeSQL.php');

mysql_select_db($database_JakeSiteServer, $JakeSiteServer);
$query_getBlogPosts = "SELECT PostID, Title, Date, Author, Body, Category, Tags FROM BlogPosts ORDER BY PostID DESC";
$getBlogPosts = mysql_query($query_getBlogPosts, $JakeSiteServer) or die(mysql_error());
$row_getBlogPosts = mysql_fetch_assoc($getBlogPosts);
$totalRows_getBlogPosts = mysql_num_rows($getBlogPosts);
?>

<div class="section_header">Blog<a class="green_button" href="blog">See all</a></div>
<div class="section group">
	<div class="col span_1_of_3">
		<?php 
			include("getposts.php");
		?>
	</div>
	<div class="col span_1_of_3">
	<?php 
		$row_getBlogPosts = mysql_fetch_assoc($getBlogPosts);
		include("getposts.php");
	?>
	</div>
	<div class="col span_1_of_3">
	<?php 
		$row_getBlogPosts = mysql_fetch_assoc($getBlogPosts);
		include("getposts.php"); 
	?>
	</div>
</div>