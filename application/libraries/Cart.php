<?php 

	class Cart 
	{
		private $CI;
		
		public function __construct()
		{
			$this->CI = & get_instance();
		}
		
		public function add( $id, $qty )
		{
			
		}
		
		public function get()
		{
			$cart = $this->CI->session->userdata('cart');
		}
	}
?>