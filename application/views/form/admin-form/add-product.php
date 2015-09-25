<div class="container main-content">
	<div class="row">
		<h1 class="none-padding page-title col-xs-3"><?php echo $title;?></h1>
	</div>
	<div class="row">

		<div class="add-product-layout col-xs-8">
				

			<form method="post" action="" enctype="multipart/form-data">

				

				<div class="form-group">
					<label for="title" class="col-lg-3 control-label">Title *</label>
					<div class="col-lg-9">
						<input type="text" name="title" id="title" class="form-control" value="">
					</div>
					<div class="clear"></div>
				</div><br>

				<div class="form-group">
					<label for="title" class="col-lg-3 control-label">Category *</label>
					<div class="col-lg-9">
						<select class="form-control" id="select">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="clear"></div>
				</div><br>

				
				<div class="form-group">
					<label for="regular_price" class="col-lg-3 control-label">Regular Price *</label>
					<div class="col-lg-9">
						<input type="number" name="regular_price" id="regular_price" class="form-control" value="">
					</div>
					<div class="clear"></div>
				</div><br>

				<div class="form-group">
					<label for="sale_price" class="col-lg-3 control-label">Sale Price</label>
					<div class="col-lg-9">
						<input type="number" name="sale_price" id="sale_price" class="form-control" value="">
					</div>
					<div class="clear"></div>
				</div><br>

				<div class="form-group">
					<label for="product_image" class="col-lg-3 control-label">Product image</label>
					<div class="col-lg-9">
						<input type="file" name="product_image" id="product_image" class="form-control" value="">
					</div>
					<div class="clear"></div>
				</div><br>
				
			
				<div class="form-group">
					<div class="col-lg-12">
						<input type="submit" name="submit" class="btn btn-success" style="margin-bottom:20px;">
						<input type="button" name="submit" class="btn btn-danger" style="margin-bottom:20px;" value="Cancel">
					</div>
				</div>

				

				
			</form>
			
		
		</div>

	</div>
</div>
