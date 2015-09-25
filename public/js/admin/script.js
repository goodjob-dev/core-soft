$(document).ready(function()
{
	$('.delete-link').popup('Are you sure you want to delete this product');
});

$.fn.popup = function( message )
{
	$(this).click(function()
	{
		return confirm(message);
	});
}