<?php
	$category =  $row_getBlogPosts['Category'];
	
	if (strcmp(strtolower($category), "first post") == 0) {
		$ribbon_colour = "6aee00";
	}else if (strcmp(strtolower($category), "site development") == 0) {
		$ribbon_colour = "ee0000";
	}else if (strcmp(strtolower($category), "new page") == 0) {
		$ribbon_colour = "05abe4";
	}else {$ribbon_colour = "eeae00";}
?>

<div class='postBox'>
	<div class="innerPostBox blog_border" style="border-color: #<?php echo $ribbon_colour; ?>;">
	    <div class="post_content_container">
		    <div class='postTitle'><?php echo $row_getBlogPosts['Title']; ?></div>
		    <div class='postBody'><?php echo $row_getBlogPosts['Body']; ?> </div>
	    </div>
	    <div class='postFooter'>
	        <div class='postDate'>
	            <?php
	                $rowdate = $row_getBlogPosts['Date'];
	                echo date('F j, Y', strtotime($rowdate));
	            ?>
	        </div>
	    </div>
	</div>
</div>