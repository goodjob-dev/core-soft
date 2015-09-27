<div class="container">
	<div class="row top-content">
		<h1 class="page-title col-xs-3"><?php echo $title;?></h1>
	</div>
	<div class="row">
		<?php if( $messages !== FALSE ) : ?> 
			<div class="table-responsive container">
				<table class="table  table-hover">
					<thead>
						<th>#</th>
						<th>Name</th>
						<th>email</th>
						<th>phone</th>
						<th>create_date</th>
					</thead>
					<tbody>
						<?php 
							$id = 1;
						
							foreach( $messages as $message ) :
						?>
							<?php $messageSeen = ($message->seen == 0 ? 'info' : 'active'); ?>
								<tr class="message_tr <?php echo $messageSeen; ?>" data-message-id="<?php echo $message->id; ?>">
									<td><?php echo $id;?></td>
									<td><?php echo $message->name; ?></td>
									<td><?php echo $message->email; ?></td>
									<td><?php echo $message->phone; ?></td>
									<td><?php echo date('F j, Y', strtotime($message->create_date)); ?></td>
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
				There is no messages to show
			</h1>
		<?php endif;?>
	</div>
</div>