<?php

defined('BASEPATH') OR exit();

class Layout
{
	public function render( $view, $params = array(), $admin = FALSE, $layout = TRUE )
	{
		$title  = '';
		$header = '';
		$footer = '';
		$path   = 'inc/';
		
		/**
		 * Get CI Instance
		*/
		$CI = & get_instance();
		
		
		/**
		 * Get assets from config file
		*/
		$assets  = $CI->config->item('assets');
		
		
		/**
		 * Set page title
		*/
		if( isset($params['title']) )
		{
			$title = $params['title'];
		}
		
		
		/**
		 * Configure assets and path: For admin and public area
		*/
		if( $admin )
		{ 
			$path   = 'inc/admin/';
			$assets = $assets['admin'];
		} else {
			$assets = $assets['public'];
		}
		
		
		/**
		 * Get layout components
		*/
		if( $layout )
		{
			$header = $CI->load->view( $path . 'header.php', [], TRUE );
			$footer = $CI->load->view( $path . 'footer.php', [], TRUE );
		}
		
		
		$content = $CI->load->view( $view, $params, TRUE );
		
		$CI->load->view(
			
			'layouts/default',

			array(
				'header'  => $header,
				'footer'  => $footer,
				'content' => $content,
				'assets'  => $assets,
				'title'   => $title
			)
		);
	}
}

?>