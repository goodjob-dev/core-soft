<div class="container">
	<div class="row top-content">
		<h1 class="page-title col-xs-3"><?php echo $title;?></h1>
		<a href="/manage/products/add" class="add-button btn btn-success">
			Add product
		</a>
	</div>
	<div class="row">
		<div class="table-responsive container">
			<table class="table table-striped table-bordered">
				<thead>
					<th>#</th>
					<th>Image</th>
					<th>Title</th>
					<th>Sale price</th>
					<th>Regular price</th>
					<th>Category</th>
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
							
							<td><?php echo $product->sale_price;?></td>
							
							<td><?php echo $product->regular_price;?></td>
							
							<td><?php echo $product->category_title;?></td>
							
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
	</div>
</div>