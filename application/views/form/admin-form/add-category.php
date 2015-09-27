<div class="container main-content">
	<div class="row">
		<h1 class="page-title col-xs-3"><?php echo $title;?></h1>
	</div>
	<div class="row">

		<div class="add-category-layout col-xs-8">
				

			<form method="post" action="" class="form-horizontal">

				

				<div class="form-group <?php if(form_error('title')) {echo "has-error";} ?>">
					<label for="title" class="col-lg-3 control-label">Title *</label>
					<div class="col-lg-9">
						<input type="text" name="title" id="title" class="form-control" value="<?php echo set_value('title'); ?>">
					</div>
				</div>

				
			
				<div class="form-group">
					<div class="col-lg-12">
						<input type="submit" name="add_category" class="btn btn-success" value="Add">
						<a class="btn btn-danger" href="/manage/categories">Cancel</a>
					</div>
				</div>

				

				
			</form>
			
		
		</div>

	</div>
</div>
