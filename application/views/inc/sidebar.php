<div class="sidebar col-sm-3 col-md-3">
	<?php if($categories): ?>
		<div class="sidebar_item categories">
			<h4>Categories</h4>
			<ul>
				<?php if($gs_categories): ?>
					<?php foreach($gs_categories as $key => $value): ?>
						<li><a href="/category/<?php echo $value->alias; ?>"><span><?php echo $value->title; ?></span></a></li>
					<?php endforeach; ?>
				<?php else: ?>
					<li><a><span>no categories</span></a></li>
				<?php endif; ?>
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