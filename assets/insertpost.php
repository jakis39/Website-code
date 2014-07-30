<?php
	require_once('../connections/JakeSQL.php');

	if (!$JakeSiteServer)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	mysql_select_db("jakebase", $JakeSiteServer);

	$title = mysql_real_escape_string($_POST['title']);
	$author = mysql_real_escape_string($_POST['author']);
	$body = nl2br($_POST['body']);
	$body = mysql_real_escape_string($_POST['body']);
	$category = mysql_real_escape_string($_POST['category']);
	$tags = mysql_real_escape_string($_POST['tags']);

	$sql="INSERT INTO BlogPosts (Title, Date, Author, Body, Category, Tags)
	VALUES ('" . $title . "', now(), '" . $author . "', '" . $body . "', '" . $category . "', '" . $tags . "')";

	if (!mysql_query($sql,$JakeSiteServer))
	  {
	  die('Error: ' . mysql_error());
	  }
	  
	setlocale(LC_ALL, 'en_US.UTF8');
	function toAscii($str, $id) {
		$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
		$clean = preg_replace("/&amp;/", 'and', $clean);
		$clean = preg_replace("/[^a-zA-Z0-9\/_| -]/", '', $clean);
		$clean = strtolower(trim($clean, '-'));
		$clean = preg_replace("/[\/_| -]+/", '-', $clean);
		
		$clean = $id . "-" . $clean;
		
		return $clean;
	}

	$getPostID_query = "SELECT PostID FROM BlogPosts ORDER BY PostID DESC LIMIT 1";
	$getPostID = mysql_query($getPostID_query, $JakeSiteServer) or die("Error: " . mysql_error());
	$row_getPostID = mysql_fetch_assoc($getPostID);

	$postID = $row_getPostID['PostID'];

	$newstring = toAscii($title, $postID);

	$urlsql_query="INSERT INTO URLRef (ID, urlTitle)
	VALUES (" . $postID . ", '" . $newstring . "')";

	if (!mysql_query($urlsql_query,$JakeSiteServer))
	  {
	  die('Error: ' . mysql_error());
	  }

	mysql_close($JakeSiteServer);
	die("true");
?>