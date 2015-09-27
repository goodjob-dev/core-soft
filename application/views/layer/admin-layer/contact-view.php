<div class="container">
	<div class="row top-content">
		<h1 class="page-title col-xs-3"><?php echo $title;?></h1>
	</div>
	<div class="row">
		<?php if( $message !== FALSE ) : ?>

			<div class="message-box">
			


				<hr>
				From - <span class="text-info"><?php echo $message->name; ?></span> | < <span class="text-primary"><?php echo $message->email; ?></span> > to <b>me</b> on <?php echo date('G:i, j F Y', strtotime($message->create_date)); ?>
				
				<hr>

				<span class="text-primary message-text"><?php echo $message->message_text; ?></span>

				<p class="text-right"><a href="/manage/contacts">back</a></p>
				<hr>

				<?php if($message->phone or $message->url): ?>
					<span class="text-info">Info</span><br>
					<p class="text-primary">Phone - <?php if($message->phone) {echo $message->phone;} else {echo "none";} ?></p>	
					<p class="text-primary">Url - 
						<?php

							if($message->url)
							{
								echo "<a href=" . $message->url . " target='_blank'>" .  $message->url . "</a>";
							} else {
								echo "none";
							}

						?>
					</p>
				<?php endif; ?>

			</div>



		<?php else : ?>
			<h1 class="text-center">
				There is no messages to show
			</h1>
		<?php endif;?>
	</div>
</div>