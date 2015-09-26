<div class="container main-content">
	<div class="row">

		<div class="cart-layout col-sm-12 col-md-12">
			<h1 class="cart-title">Shopping-cart summary
				<span>Your shopping cart contains:2 products</span>
			</h1>
			
			<!-- <p class="alert alert-warning">Your shopping cart is empty.</p> -->
			
			<div class="order-detail-content">
				<table class="table table-bordered cart-table">
					<thead>
						<tr>
							<th class="first_item">Product</th>
							<th class="item">Description</th>
							<th class="item">Unit price</th>
							<th class="item">Qty</th>
							<th class="item">&nbsp;</th>
							<th class="item ">Total</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td class="cart_product">
								<a href="#"><img src="uploads/products/product_1.jpg" width="98" height="98"></a>
							</td>

							<td class="cart_description">
								<p class="product-name"><a href="#">Product title</a></p>
							</td>
							
							<td class="cart_unit">
								<ul class="price text-right">
									<li class="price">$21.00</li>
								</ul>
							</td>

							<td class="cart_quantity text-center">
								<div class="pb-qty cart-qty">
									<input type="text" name="qty" class="qty" value="1"><br><br>
									<span class="decr btn btn-sm">
										<i class="glyphicon glyphicon-minus"></i>
									</span>
									<span class="incr btn btn-sm">
										<i class="glyphicon glyphicon-plus"></i>
									</span>
									<div class="clear"></div>
								</div>
							</td>

							<td class="cart_delete text-center">
								<a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>

							<td class="cart_total text-right">
								<span class="price" >$61.00</span>
							</td>
						</tr>
						
					</tbody>

					<tfoot>
						<tr>
							<td colspan="5">
								<span>Total</span>
							</td>
							<td colspan="2">
								<span class="total-price">$114.51</span>
							</td>
						</tr>
					</tfoot>
				</table>
			</div>

		</div>

	</div>
</div>