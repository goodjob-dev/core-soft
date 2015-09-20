<?php 

defined('BASEPATH') OR exit();

class AssetsController extends CI_Controller 
{	
	private $assets = '';

	private $mime   = array(
		'images' => array(
			'png'  => 'image/png',
			'jpg'  => 'image/jpeg',
			'jpeg' => 'image/jpeg',
			'gif'  => 'image/gif'
		),
		'fonts'  => array(
			'eot'   => 'application/vnd.ms-fontobject',
			'svg'   => 'application/vnd.oipf.dae.svg+xml',
			'ttf'   => 'application/x-font-ttf',
			'woff'  => 'application/font-woff',
			'woff2' => 'application/font-woff2',
			'otf'   => 'font/opentype'
		)
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

		if( array_key_exists( $ext[0], $this->mime['images'] ) )
		{
			$this->send( $this->mime['images'][ $ext[0] ], '/images/', $file );
		}
		else 
		{
			show_404();
		}
	}
	
	public function fonts( $file )
	{
		preg_match('/[^\.]*$/', $file, $ext);
		
		if( array_key_exists( $ext[0], $this->mime['fonts'] ) )
		{
			$this->send( $this->mime['fonts'][ $ext[0] ], '/fonts/', $file );
		}
		else 
		{
			show_404();
		}
	}
}

?>