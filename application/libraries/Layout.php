<?php

defined('BASEPATH') OR exit();

class Layout
{
	public function render( $view, $params = array(), $admin = FALSE )
	{
		$CI = & get_instance();

		$content = $CI->load->view( $view, $params, TRUE );
		$assets  = $CI->config->item('assets');
		$title   = '';

		if( $admin ) {	
			$assets = $assets['admin'];
		}
		else {
			$assets = $assets['public'];
		}

		if( isset( $params['title'] ) ) {
			$title = $params['title'];
		}

		$CI->load->view(
			
			'layouts/default',

			array(
				'content' => $content,
				'assets'  => $assets,
				'title'   => $title
			)
		);
	}
}

?>