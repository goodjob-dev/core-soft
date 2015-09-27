<div class="container">
	<div class="row top-content">
		<h1 class="page-title col-xs-3"><?php echo $title;?></h1>
		<a href="/manage/categories/add" class="add-button btn btn-success">
			Add category
		</a>
	</div>
	<div class="row">
		<?php if( $categories !== FALSE ) : ?> 
		<div class="table-responsive container">
			<table class="table table-striped table-bordered">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Created</th>
					<th>Actions</th>
				</thead>
				<tbody>
					<?php 
						$id = 1;
					
						foreach( $categories as $category ) :
					?>
						<tr>
						
							<td><?php echo $id;?></td>
								
								
							<td><?php echo $category->title; ?></td>
							
							<td><?php echo date('F j, Y', strtotime($category->create_date)); ?></td>
							
							<td>
								<a target="_blank" href="/manage/categories/edit/<?php echo $category->id?>">Edit</a>
								<br>
								<a class="delete-link" href="/manage/categories/delete/<?php echo $category->id?>">Delete</a>
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
			There is no categories to show
		</h1>
		<?php endif;?>
	</div>
</div>