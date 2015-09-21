<div class="sidebar col-sm-3 col-md-3">
	<?php if($categories): ?>
		<div class="sidebar_item categories">
			<h4>Categories</h4>
			<ul>
				<?php foreach($gs_categories as $key => $value): ?>
					<li><a href="#"><span><?php echo $value->title; ?></span></a></li>
				<?php endforeach; ?>
				
			</ul>
		</div>
	<?php endif; ?>
	<?php if($pricefilter): ?>
		<div class="sidebar_item pricefilter">
			<h4>Price range:</h4>
			<p>
				<input type="text" id="amount" readonly>
			</p>

			<div id="slider-range"></div>
		</div>
	<?php endif; ?>
</div>