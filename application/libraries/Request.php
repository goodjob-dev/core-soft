<?php 
	class Request
	{
		public function redirectTo( $location )
		{
			get_instance()->load->helper('url');
			
			redirect( $location );
		}

		public function getCsrf($type)
		{
			$CI = & get_instance();

			$token = sha1( time() + uniqid( mt_rand(), TRUE ) );

			$CI->session->set_userdata(array( 'csrf-' . $type => $token ));

			return $token;
		}

		public function isValid( $type )
		{
			$CI = & get_instance();

			if( $CI->input->post('oauth') == $CI->session->userdata('csrf-' . $type) )
			{
				return TRUE;
			}

			return FALSE;
		}
	}
?>