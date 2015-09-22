<?php

	$_adminPages = 
	[
		[
			'title' => 'Dashboard',
			'route' => ''
		],
		[
			'title' => 'Products',
			'route' => 'products'
		],
		[
			'title' => 'Users',
			'route' => 'users'
		]
	];

?>

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#admin-navigation">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="admin-navigation">
			<ul class="nav navbar-nav">
				<?php 
					foreach( $_adminPages as $page )
					{
				?>
					<li>
						<a href="/manage/<?php echo $page['route']?>">
							<?php echo $page['title'];?>
						</a>
					</li>
				<?php 
					}
				?>
			</ul>
		</div>
	</div>
</nav>