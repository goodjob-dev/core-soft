<div class="container main-content">
	<div class="row">
		<h1 class="page-title col-xs-3"><?php echo $title;?></h1>
	</div>
	<div class="row">

		<div class="add-product-layout col-xs-8">
				

			<form method="post" action="" class="form-horizontal" enctype="multipart/form-data">

				

				<div class="form-group <?php if(form_error('title')) {echo "has-error";} ?>">
					<label for="title" class="col-lg-3 control-label">Title *</label>
					<div class="col-lg-9">
						<input type="text" name="title" id="title" class="form-control" value="<?php echo set_value('title'); ?>">
					</div>
				</div>

				<div class="form-group <?php if(form_error('select')) {echo "has-error";} ?>">
					<label for="select" class="col-lg-3 control-label">Category *</label>
					<div class="col-lg-9">
						<select class="form-control" id="select" name="category">
							<?php foreach($categories as $key => $value): ?>
								<option value="<?php echo $value->id; ?>"><?php echo $value->title; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>

				
				<div class="form-group <?php if(form_error('regular_price')) {echo "has-error";} ?>">
					<label for="regular_price" class="col-lg-3 control-label">Regular Price *</label>
					<div class="col-lg-9">
						<input type="number" name="regular_price" id="regular_price" class="form-control" value="<?php echo set_value('regular_price'); ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="sale_price" class="col-lg-3 control-label">Sale Price</label>
					<div class="col-lg-9">
						<input type="number" name="sale_price" id="sale_price" class="form-control" value="<?php echo set_value('sale_price'); ?>">
					</div>
				</div>

				<div class="form-group <?php if(form_error('product_image')) {echo "has-error";} ?>">
					<label for="product_image" class="col-lg-3 control-label">Product image</label>
					<div class="col-lg-9">
						<input type="file" name="product_image" id="product_image" class="form-control" value="">
					</div>
				</div>

				<div class="form-group">
					<label for="description" class="col-lg-3 control-label">Description</label>
					<div class="col-lg-9">
						<textarea id="description" name="description" class="form-control" rows="5"></textarea>
					</div>
				</div>
				
			
				<div class="form-group">
					<div class="col-lg-12">
						<input type="submit" name="add_product" class="btn btn-success" value="Add">
						<a class="btn btn-danger" href="<?php echo base_url(); ?>manage/products">Cancel</a>
					</div>
				</div>

				

				
			</form>
			
		
		</div>

	</div>
</div>
