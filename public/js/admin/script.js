$(document).ready(function()
{
	$('.delete-link').popup('Are you sure you want to delete this product');

	$('.status-change').bootstrapSwitch({
		onSwitchChange: function(evt, state)
		{
			redirect( state, $(evt.currentTarget).data('id') );
		
		},
		onColor : 'success',
		offColor: 'danger'
	});

	function redirect( state, id )
	{
		var str  = location.origin;
			str += '/manage/products/';
			str += ( state === true ) ? 'on' : 'off';
			str += '/';
			str += id;

		location.href = str;
	}

});

$.fn.popup = function( message )
{
	$(this).click(function()
	{
		return confirm(message);
	});
}