$(function() {


	$( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 1000,
		values: [ 0, 1000 ],
		slide: function( event, ui ) {
			$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		}
	});
	$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );


	/* add to cart */
	$('.addtocart-btn').click(function(e){
		e.preventDefault();

		id = $(this).data('id');

		$.ajax({
			url: "/cart/add/" + id,
			type: "POST",
			success: function (data) {
				
			}
		});

	});

});