<div class="container main-content">
	<div class="row">

		<?php 
			echo $sidebar;
		?>

		<div class="contact-layout col-sm-9 col-md-9">
			
			<div class="contact-form">
				<form method="post" action="">

					<div class="row">
						<div class="col-lg-6 input-group-contact">
							<label for="name">Name *</label>
							<input type="text" name="name" id="name" class="form-input">
						</div>
						
						<div class="col-lg-6 input-group-contact">
							<label for="name">Email *</label>
							<input type="email" name="email" id="email" class="form-input">
						</div><br>
					</div>

					<label for="name" class="input-group-contact">Url</label><br>
					<input type="url" name="url" id="url" class="form-input"><br><br>

					<label for="message-text">Message *</label>
					<textarea name="message-text" id="message-text" class="form-input" style="height:150px;"></textarea><br><br>

					<input type="submit" name="submit" class="btn btn-red" style="margin-bottom:20px;">
				</form>
			</div>
			
		
		</div>

	</div>
</div>
