$(function() {
	
	(new gShop()).init();
	
});

var gShop = function()
{
	var createPriceFilter = function()
	{
		$('#slider-range').slider(
		{
			range: true,
			min: 0,
			max: 1000,
			values: [ 0, 1000 ],
			slide: function( event, ui ) 
			{
				$('#amount').val('$' + ui.values[0] + ' - $' + ui.values[1]);
			}
		});
		
		var min = $( '#slider-range' ).slider( 'values', 0 ),
			max = $( '#slider-range' ).slider( 'values', 1 );
		
		$( '#amount' ).val( '$' + min + ' - $' + max );
	};
	
	var createqtyCounter = function()
	{	
		$('.decr').click( function()
		{
			var inp = $(this).parent().find('.qty'),
				val = parseInt(inp.val());
			
			if( val == 1 )
				return;
			
			inp.val( val - 1 );
		});
		$('.incr').click( function()
		{
			var inp = $(this).parent().find('.qty');
			
			inp.val( parseInt(inp.val()) + 1 );
		});
	}
	
	
	
	this.init = function()
	{
		if( $('#slider-range').length )
		{
			createPriceFilter();
		}
		
		if( $('.pb-qty').length )
		{
			createqtyCounter();
		}
	};
};