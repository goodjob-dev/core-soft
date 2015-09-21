<div class="container main-content">
	<div class="row">

		<div class="one-product-layout col-sm-9 col-md-9">

			<div class="product-box">
				<div class="pb-left-column col-xs-12 col-sm-12 col-md-7">
					<div class="pb-image">
						<img src="/uploads/products/<?php echo 'product_' . $product->id . '.' . $product->extension; ?>">
					</div>
				</div>
				<div class="pb-center-column col-xs-12 col-sm-12 col-md-5">
					<h1 class="pb-title"><?php echo $product->title ?></h1>
					<p class="pb-description"><?php echo $product->description ?></p>
					<div class="pb-price">
						<div class="product-price">
							<?php if($product->sale_price == 0): ?>
								<span class="price bold">$<?php echo $product->regular_price ?></span>
							<?php else: ?>
								<span class="old-price">$<?php echo $product->regular_price ?></span>
								<span class="price bold">$<?php echo $product->sale_price ?></span>
							<?php endif; ?>
						</div>
					</div>
					<div class="pb-qty">
						<input type="text" name="qty" class="qty" value="1">
						<span class="btn btn-sm"><i class="glyphicon glyphicon-minus"></i></span>
						<span class="btn btn-sm"><i class="glyphicon glyphicon-plus"></i></span>
						<div class="clear"></div>
					</div>
					<div class="pb-addcart">
						<div class="pb-addcart-left">
							<button type="submit" name="Submit" class="btn btn-outline">
								<i class="glyphicon glyphicon-shopping-cart"></i>
								<span>Add to cart</span>
							</button>
						</div>
						<div class="pb-addcart-right">
							<?php if($product->availability): ?>
								<span class="label label-success">In stock</span>
							<?php else: ?>
								<span class="label label-danger">No stock</span>
							<?php endif; ?>
						</div>
						<div class="clear"></div>
					</div>
						
				</div>
				<div class="clear"></div>
			</div>
			
			<ul class="product-tabs">
				<li><a href="/" class="product-newproducts"><span></span>New Arrivals</a></li>
				<li><a href="/" class="product-sale"><span></span>Sale Products</a></li>
				<li><a href="/" class="product-bestseller"><span></span>Best Seller</a></li>
			</ul>
			<div class="clear"></div>
			<div class="products col-sm-12 col-md-12">

				
				<?php foreach($products as $key => $value): ?>
					<div class="product col-lg-3 col-md-4 col-sm-10">
						<div class="top-block">
							<a href="#">
								<img class="img-responsive" src="/uploads/products/thumbs/<?php echo 'product_' . $value->id . '.' . $value->extension; ?>">
							</a>
						</div>
						<div class="bottom-block">
							<div class="product-info">
								<h5><a href="#"><?php echo $value->title ?></a></h5>
								<div class="product-price">
									<?php if($value->sale_price == 0): ?>
										<span class="price bold">$<?php echo $value->regular_price ?></span>
									<?php else: ?>
										<span class="old-price">$<?php echo $value->regular_price ?></span>
										<span class="price bold">$<?php echo $value->sale_price ?></span>
									<?php endif; ?>
								</div>
								<div class="product-addcart">
									<a class="button btn addtocart-btn" href="#">
										<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
										<span>Add to cart</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				

			</div>
		</div>

		<?php 
			echo $sidebar;
		?>

	</div>
</div>
