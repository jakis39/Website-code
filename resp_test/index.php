<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="resp_grid.css" rel="stylesheet" type="text/css" />
	<script src="../assets/javascript/jquery-1.9.1.min.js" type="text/javascript"></script>
</head>

<body>
	<?php
		$sampletext = array("Vivamus at mi ut est ultrices congue. Donec interdum nibh eu lorem accumsan, ut placerat urna ultrices. Aenean posuere purus nec tempor cursus. Suspendisse in dui vel sem eleifend convallis et non turpis. Pellentesque pretium lorem eros, et lacinia tortor ultrices a. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque porttitor turpis in sapien sodales egestas. Aenean luctus adipiscing risus id elementum.",
			"Nullam a elementum nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin leo urna, placerat.",
			"Suspendisse euismod convallis eros, ac commodo nibh. In hac habitasse platea dictumst. Vivamus in dolor non nunc feugiat posuere sit amet a ante. Nulla gravida aliquet condimentum. Praesent mollis neque velit, ac venenatis nibh viverra in.<br/><br/>Phasellus lacinia velit vestibulum elit scelerisque venenatis. Integer pulvinar justo in elit bibendum, quis blandit turpis blandit. Cras in risus lorem.",
			"Hello, yes, this is dog.",
			"Cras id scelerisque elit. Aenean euismod molestie diam, non tincidunt eros mollis at.",
			"Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam pellentesque pulvinar neque nec tristique. Vestibulum sed eros varius, fermentum elit nec, iaculis diam. Donec id consequat ante. Nullam aliquam purus ut tempor volutpat. Aenean ac enim at lorem congue porta. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.");
		//var_dump($sampletext);
		for($i=0;$i<15;$i++)
		{
			$index = rand(0,5);
			echo '<div class="grid_1_of_3"><div class="example"><p>';
			echo $sampletext[$index];
			echo '</p></div></div>';
		}
	?>
</body>
</html>

<script src="../assets/javascript/functions.js" type="text/javascript"></script>
<script src="resp.js" type="text/javascript"></script>