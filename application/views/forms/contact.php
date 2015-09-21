<div class="container main-content">
	<div class="row">

		<?php 
			echo $sidebar;
		?>

		<div class="contact-layout col-sm-9 col-md-9">
				
			<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1563246.0242156954!2d45.04074105!3d40.070618500000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40155684e773bac7%3A0xd0b4757aeb822d23!2z1YDVodW11aHVvdW_1aHVtg!5e0!3m2!1shy!2s!4v1442832672935" width="850" height="450" frameborder="0" style="border:0;margin-top:15px;" allowfullscreen></iframe>
 -->
			<div class="contact-form">
				<form method="post" action="">

					<div class="row">
						<div class="col-lg-6 input-group-contact">
							<label for="name">Name *</label>
							<input type="text" name="name" id="name" class="form-input" value="<?php echo set_value('name'); ?>">
							<?php echo form_error('name', '<div class="error">', '</div>'); ?>
						</div>
						
						
						<div class="col-lg-6 input-group-contact">
							<label for="name">Email *</label>
							<input type="text" name="email" id="email" class="form-input" value="<?php echo set_value('email'); ?>">
							<?php echo form_error('email', '<div class="error">', '</div>'); ?>
						</div><br>
						
					</div>

					<label for="name" class="input-group-contact">Url</label><br>
					<input type="text" name="url" id="url" class="form-input"><br>

					<label for="message-text">Message *</label>
					<textarea name="message-text" id="message-text" class="form-input" style="height:150px;"><?php echo set_value('message-text'); ?></textarea><br>
					<?php echo form_error('message-text', '<div class="error">', '</div>'); ?><br>

					<input type="submit" name="submit" class="btn btn-red" style="margin-bottom:20px;">

					
				</form>
			</div>
			
		
		</div>

	</div>
</div>
