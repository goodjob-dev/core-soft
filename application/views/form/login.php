<div class="container">
	<div class="row vertical-center">

		<div class="col-sm-6 col-sm-offset-3">

			<div class="panel panel-info">

				<div class="panel-heading">
					<h3>Log in</h3>
				</div>

				<div class="panel-body">
				
					<div class="row">
							<div class="validation-errors col-lg-10 col-lg-offset-2">
								<?php echo $errors;?>
							</div>
					</div>

					<form action="" method="POST" class="form-horizontal">

						<input type="hidden"   name="oauth"    value="<?php echo $oauth;?>" />

						<div class="form-group">
							<label for="username" class="col-lg-2 control-label">Username</label>
							<div class="col-lg-10">
								<input type="text" name="username" id="username" class="form-control" />
							</div>
						</div>
						
						<div class="form-group">
							<label for="password" class="col-lg-2 control-label">Password</label>
							<div class="col-lg-10">
								<input type="password" name="password" id="password" class="form-control" />
							</div>
						</div>

						<input type="submit" name="submit" value="Log in" class="btn btn-info" />

					</form>

				</div>

			</div>

		</div>

	</div>
</div>