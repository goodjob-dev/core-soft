<nav class="navbar navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">
				<img class="logo img-responsive" src="/images/logo.png">
			</a>
		</div>
		
		<div class="navbar-left">
			<ul class="nav navbar-nav">
				<li><a href="">Blog</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Contact Us</a></li>
			</ul>
		</div>
		
		<div class="navbar-right">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="/cart">
						<span class="glyphicon glyphicon-shopping-cart shop-icon" aria-hidden="true"></span>
						<span class="item-count">1</span>
						<h4 class="shop-price">- $0.00</h4>
					</a>
				</li>
			</ul>
		</div>
		
		<div class="navbar-right search-form">
			<form class="navbar-form navbar-left" role="search" action="/search" method="get">
				<div class="form-group">
					<input type="text" name="q" class="form-control search-input" placeholder="Search" value="<?php echo $this->input->get('q'); ?>">
				</div>
			</form>
		</div>
	</div>
</nav>