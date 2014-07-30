<?php require_once('Connections/JakeSiteServer.php'); ?>

<?php
mysql_select_db($database_JakeSiteServer, $JakeSiteServer);

$slug = (isset($_GET["title"])) ? $_GET["title"] : 1;

$slug = mysql_real_escape_string($slug);
$query_getID = "SELECT ID FROM URLRef WHERE urlTitle  = '" . $slug . "'";
$getID = mysql_query($query_getID, $JakeSiteServer) or die(mysql_error());

if(mysql_num_rows($getID) == 0) {
	header('This is not the page you are looking for', true, 404);
	include('pagenotfound.php');
	exit();
}

$row_getID = mysql_fetch_assoc($getID);

$postID = $row_getID['ID'];
$query_getBlogPosts = "SELECT PostID, Title, Date, Author, Body, Category, Tags FROM BlogPosts WHERE PostID  = " . $postID;
$getBlogPosts = mysql_query($query_getBlogPosts, $JakeSiteServer) or die(mysql_error());
$row_getBlogPosts = mysql_fetch_assoc($getBlogPosts);
$totalRows_getBlogPosts = mysql_num_rows($getBlogPosts);
?>
<?php $current_page = "blog"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Jake Nusca</title>
    <?php include("assets/googlefont.html"); ?>
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>
    <link href="/assets/styles/styles.css" rel="stylesheet" type="text/css" />
    <script src="/assets/scripts/jquery-1.7.min.js" type="text/javascript"></script>
</head>

<body>
    <div id='wrapper'>
        <div id='header'>
            <?php include("assets/logo.php"); ?>
        </div>
        
        <div id='container'>
			<?php include("nav.php"); ?>
            
            <div id="column1">
                <?php include("getposts.php"); ?>
            </div>
            <div id="column2">
				<?php include("assets/blogsidepanel.php"); ?>
             </div>
        </div>
    </div>
    
    
    <div id='footer'>
		<?php include("footer.php"); ?>
    </div>

</body>
</html>

<?php mysql_free_result($getBlogPosts); ?>

<script>
	var containerHeight = document.getElementById("container").offsetHeight;
	$(document).ready(function() {
		//alert(containerHeight);
		document.getElementById("column2").style.height = (containerHeight - 70) + "px";
	});

</script>