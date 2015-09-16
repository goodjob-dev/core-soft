<?php 
	class Redirect
	{
		public function to( $location )
		{
			get_instance()->load->helper('url');
			
			redirect( $location );
		}
	}
?>