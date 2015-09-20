<?php

	$_adminPages = 
	[
		[
			'title' => 'Dashboard',
			'route' => '/'
		],
		[
			'title' => 'Products',
			'route' => '/products'
		]
	];

?>

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<ul class="nav navbar-nav">
			<?php 
				foreach( $_adminPages as $page )
				{
			?>
				<li>
					<a href="<?php echo $page['route']?>">
						<?php echo $page['title'];?>
					</a>
				</li>
			<?php 
				}
			?>
		</ul>
	</div>
</nav>