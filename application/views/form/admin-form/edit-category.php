<div class="container main-content">
	<div class="row">
		<h1 class="page-title col-xs-3"><?php echo $title;?></h1>
	</div>
	<div class="row">

		<div class="add-category-layout col-xs-8">
				
		<?php if($category): ?>
			<form method="post" action="" class="form-horizontal">

				

				<div class="form-group <?php if(form_error('title')) {echo "has-error";} ?>">
					<label for="title" class="col-lg-3 control-label">Title *</label>
					<div class="col-lg-9">
						<input type="text" name="title" id="title" class="form-control" value="<?php echo $category->title; ?>">
					</div>
				</div>
				
			
				<div class="form-group">
					<div class="col-lg-12">
						<input type="submit" name="edit_category" class="btn btn-success" value="Update">
						<a class="btn btn-warning" href="<?php echo base_url(); ?>manage/categories">Cancel</a>
					</div>
				</div>

			</form>
		<?php else: ?>
			<div class="alert alert-dismissible alert-danger">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>There is no category matching give id</strong> <a href="/manage/categories" class="alert-link">Browse all categories</a>.
			</div>
		<?php endif; ?>
			
			

		
		</div>

	</div>
</div>
