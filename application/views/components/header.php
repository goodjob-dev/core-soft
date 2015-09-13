<head>
	<?php 
		foreach( $assets['css'] as $css ) 
		{
			echo "<link rel='stylesheet' type='text/css' href='/css/". $css .".css'>";
		}
		foreach( $assets['js'] as $js ) 
		{
			echo "<script type='text/javascript' src='/js/" . $js . ".js'></script>";
		}
	?>
</head>