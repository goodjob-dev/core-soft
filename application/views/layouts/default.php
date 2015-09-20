<!DOCTYPE html>
<html>
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
		<title><?php echo $title; ?></title>
	</head>
	
	<body>
		<?php 
			echo $header;
		?>
		
			<?php 
				echo $content;
			?>
		<?php 
			echo $footer;
		?>
	</body>
</html>