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
			'title' => 'Categories',
			'route' => 'categories'
		],
		[
			'title' => 'Contacts',
			'route' => 'contacts'
		]
	];

?>

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container nav-content">
		<div class="navbar-header">
			<a href="/manage" class="gshop-logo">
				<img src="/images/logo.png" />
			</a>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#admin-navigation">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="admin-navigation">
			<ul class="nav navbar-left navbar-nav">
				<?php 
					foreach( $_adminPages as $page )
					{
				?>
					<li>
						<a href="/manage/<?php echo $page['route']?>">
							<?php echo $page['title'];?>
							<?php if(strtolower($page['title']) == 'contacts'): ?>
								<span class="badge">42</span>
							<?php endif; ?>
							
						</a>
					</li>
				<?php 
					}
				?>
			</ul>
			<ul class="navbar-nav nav navbar-right">
				<li>
					<a href="/manage/logout">
						<i class="glyphicon glyphicon-log-out"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>