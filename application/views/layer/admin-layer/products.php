<div class="container">
	<div class="row top-content">
		<h1 class="page-title col-xs-3"><?php echo $title;?></h1>
		<a href="/manage/products/add" class="add-button btn btn-success">
			Add product
		</a>
	</div>
	<div class="row">
		<?php if( $products !== FALSE ) : ?> 
		<div class="table-responsive container">
			<table class="table table-striped table-bordered">
				<thead>
					<th>#</th>
					<th>Image</th>
					<th>Title</th>
					<th>Price</th>
					<th>Category</th>
					<th>Availability</th>
					<th>Analytics</th>
					<th>Created</th>
					<th>Actions</th>
				</thead>
				<tbody>
					<?php 
						$id = 1;
					
						foreach( $products as $product ) :
					?>
						<tr>
						
							<td><?php echo $id;?></td>
								
							<td class="product-image">
								<img src="/uploads/products/thumbs/<?php echo $product->image;?>" />
							</td>
								
							<td><?php echo $product->title;?></td>
							
							<td>
								<?php if($product->sale_price == 0): ?>
									<?php echo $product->regular_price;?>
								<?php else: ?>
									<span class="old_price"><?php echo $product->regular_price;?></span><br>
									<?php echo $product->sale_price;?>
								<?php endif; ?>
							</td>
							
							
							<td><?php echo $product->category_title;?></td>

							<td>
								<?php if($product->availability == 1): ?>
									<p><input class="status-change" type="checkbox" data-id="<?php echo $product->id;?>" checked></p>
								<?php else: ?>
									<p><input class="status-change" type="checkbox" data-id="<?php echo $product->id;?>" ></p>
								<?php endif; ?>
							</td>

							<td>
								views - <span class="analytics analytics_view"><?php echo $product->view_count;?></span>
								<hr>
								sales - <span class="analytics analytics_sales"><?php echo $product->sale_count;?></span>
							</td>
							
							<td><?php echo date( 'Y-m-d', $product->create_date ); ?></td>
							
							<td>
								<a target="_blank" href="/manage/products/edit/<?php echo $product->id?>">Edit</a>
								<br>
								<a class="delete-link" href="/manage/products/delete/<?php echo $product->id?>">Delete</a>
							</td>
							
						</tr>
					
					<?php 
						$id++;
					?>
					
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
		<?php else : ?>
		<h1 class="text-center">
			There is no products to show
		</h1>
		<?php endif;?>
	</div>
</div>