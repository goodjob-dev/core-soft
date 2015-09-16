<?php 

defined('BASEPATH') OR exit();

class AssetsController extends CI_Controller 
{	
	private $assets = '';

	private $mime   = array(
		'png'  => 'image/png',
		'jpg'  => 'image/jpeg',
		'jpeg' => 'image/jpeg',
		'gif'  => 'image/gif'
	);

	public function __construct()
	{
		parent::__construct();

		$this->assets = APPPATH . '/assets';
	}

	private function send($type, $path, $file)
	{
		$file = $this->assets . $path . $file;

		if( !file_exists( $file ) )
		{
			show_404();
		}

		ob_start();

		header('Content-Type: ' . $type . ';charset=UTF-8');
		header('Content-Length: ' . filesize( $file ));

		readfile($file);

		ob_end_flush();

		exit();
	}

	public function css( $file )
	{
		$this->send( 'text/css', '/css/', $file );
	}

	public function js( $file )
	{
		$this->send( 'text/javascript', '/js/', $file );
	}

	public function images( $file )
	{
		preg_match('/[^\.]*$/', $file, $ext);

		if( array_key_exists( $ext[0], $this->mime ) )
		{
			$this->send( $this->mime[ $ext[0] ], '/images/', $file );
		}
		else 
		{
			show_404();
		}
	}
}

?>